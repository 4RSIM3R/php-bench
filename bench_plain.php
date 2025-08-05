<?php

/**
 * PHP Performance Benchmark Suite
 * Tests various workload types to measure opcache and obfuscation impact
 * plain php no opcache
 * plain php opcache
 */

class PerformanceBenchmark
{
    private $results = [];
    private $startTime;
    private $startMemory;

    public function __construct()
    {
        // Enable memory tracking
        ini_set('memory_limit', '512M');

        echo "=== PHP Performance Benchmark Suite ===\n";
        echo "PHP Version: " . PHP_VERSION . "\n";
        echo "OpCache Enabled: " . (extension_loaded('Zend OPcache') && opcache_get_status() !== false ? 'Yes' : 'No') . "\n";
        echo "Memory Limit: " . ini_get('memory_limit') . "\n";
        echo "Max Execution Time: " . ini_get('max_execution_time') . "s\n\n";
    }

    private function startMeasurement($testName)
    {
        echo "Running: {$testName}... ";
        $this->startTime = microtime(true);
        $this->startMemory = memory_get_usage(true);

        // Force garbage collection for accurate memory measurement
        gc_collect_cycles();
    }

    private function endMeasurement($testName, $iterations = 1)
    {
        $endTime = microtime(true);
        $endMemory = memory_get_usage(true);
        $peakMemory = memory_get_peak_usage(true);

        $executionTime = ($endTime - $this->startTime) * 1000; // Convert to milliseconds
        $memoryUsed = max(0, $endMemory - $this->startMemory); // Bytes
        $avgTimePerIteration = $executionTime / $iterations;

        $this->results[$testName] = [
            'execution_time_ms' => round($executionTime, 4),
            'avg_time_per_iteration_ms' => round($avgTimePerIteration, 4),
            'memory_used_bytes' => $memoryUsed,
            'memory_used_mb' => round($memoryUsed / 1024 / 1024, 4),
            'peak_memory_mb' => round($peakMemory / 1024 / 1024, 4),
            'iterations' => $iterations
        ];

        echo "Done ({$executionTime}ms, {$this->results[$testName]['memory_used_mb']}MB)\n";
    }

    // Test 1: CPU Intensive Operations
    public function testCpuIntensive()
    {
        $this->startMeasurement('CPU Intensive Operations');

        $iterations = 100000;
        $result = 0;

        // Mathematical calculations
        for ($i = 0; $i < $iterations; $i++) {
            $result += sqrt($i) * sin($i) * cos($i);
            $result += pow($i % 100, 2);
            $result += log($i + 1);
        }

        // Prime number calculation
        $primes = [];
        for ($num = 2; $num <= 1000; $num++) {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                $primes[] = $num;
            }
        }

        $this->endMeasurement('CPU Intensive Operations', $iterations);
        return $result;
    }

    // Test 2: Memory Intensive Operations
    public function testMemoryIntensive()
    {
        $this->startMeasurement('Memory Intensive Operations');

        $iterations = 10000;
        $arrays = [];

        // Create large arrays
        for ($i = 0; $i < $iterations; $i++) {
            $arrays[$i] = range(0, 100);
            $arrays[$i] = array_map(function ($x) use ($i) {
                return $x * $i * rand(1, 100);
            }, $arrays[$i]);
        }

        // Array operations
        $merged = [];
        foreach ($arrays as $arr) {
            $merged = array_merge($merged, $arr);
        }

        // Sort large array
        sort($merged);

        // String operations
        $largeString = str_repeat('Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 10000);
        $parts = explode(' ', $largeString);
        $reversed = array_reverse($parts);
        $rejoined = implode(' ', $reversed);

        $this->endMeasurement('Memory Intensive Operations', $iterations);

        // Clean up
        unset($arrays, $merged, $largeString, $parts, $reversed, $rejoined);
    }

    // Test 3: String Operations
    public function testStringOperations()
    {
        $this->startMeasurement('String Operations');

        $iterations = 50000;
        $baseString = "The quick brown fox jumps over the lazy dog";
        $results = [];

        for ($i = 0; $i < $iterations; $i++) {
            // String concatenation
            $concat = $baseString . " - " . $i;

            // String manipulation
            $upper = strtoupper($concat);
            $lower = strtolower($upper);
            $replaced = str_replace('fox', 'cat', $lower);

            // Regular expressions
            $pattern = '/\b\w{4,}\b/';
            preg_match_all($pattern, $replaced, $matches);

            // String hashing
            $hash = md5($replaced);

            if ($i % 10000 == 0) {
                $results[] = $hash;
            }
        }

        $this->endMeasurement('String Operations', $iterations);
        return count($results);
    }

    // Test 4: Array Operations
    public function testArrayOperations()
    {
        $this->startMeasurement('Array Operations');

        $iterations = 10000;
        $data = range(1, 1000);

        for ($i = 0; $i < $iterations; $i++) {
            // Array manipulation
            $shuffled = $data;
            shuffle($shuffled);

            // Sorting
            $sorted = $shuffled;
            sort($sorted);
            rsort($sorted);

            // Array functions
            $filtered = array_filter($sorted, function ($x) {
                return $x % 2 == 0;
            });

            $mapped = array_map(function ($x) {
                return $x * 2;
            }, $filtered);

            $reduced = array_reduce($mapped, function ($carry, $item) {
                return $carry + $item;
            }, 0);

            // Array searching
            $search = array_search(500, $sorted);
            $exists = in_array(750, $sorted);
        }

        $this->endMeasurement('Array Operations', $iterations);
    }

    // Test 5: Object Operations
    public function testObjectOperations()
    {
        $this->startMeasurement('Object Operations');

        $iterations = 20000;
        $objects = [];

        // Object creation and manipulation
        for ($i = 0; $i < $iterations; $i++) {
            $obj = new stdClass();
            $obj->id = $i;
            $obj->name = "Object_{$i}";
            $obj->value = rand(1, 1000);
            $obj->timestamp = time();
            $obj->data = [
                'type' => 'test',
                'category' => $i % 10,
                'active' => $i % 2 == 0
            ];

            $objects[] = $obj;
        }

        // Object operations
        foreach ($objects as $obj) {
            $obj->processed = true;
            $obj->hash = md5($obj->name . $obj->value);
        }

        // Serialization
        $serialized = serialize($objects);
        $unserialized = unserialize($serialized);

        // JSON operations
        $json = json_encode($objects);
        $decoded = json_decode($json);

        $this->endMeasurement('Object Operations', $iterations);

        // Clean up
        unset($objects, $serialized, $unserialized, $json, $decoded);
    }

    // Test 6: File I/O Operations
    public function testFileOperations()
    {
        $this->startMeasurement('File I/O Operations');

        $iterations = 1000;
        $tempDir = sys_get_temp_dir() . '/php_benchmark_' . uniqid();

        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

        $files = [];

        // File writing
        for ($i = 0; $i < $iterations; $i++) {
            $filename = $tempDir . "/test_file_{$i}.txt";
            $content = str_repeat("Line {$i}: Lorem ipsum dolor sit amet.\n", 100);
            file_put_contents($filename, $content);
            $files[] = $filename;
        }

        // File reading
        $totalSize = 0;
        foreach ($files as $file) {
            $content = file_get_contents($file);
            $totalSize += strlen($content);

            // File info operations
            $size = filesize($file);
            $modified = filemtime($file);
        }

        // File operations
        foreach ($files as $file) {
            $lines = file($file, FILE_IGNORE_NEW_LINES);
            $lineCount = count($lines);
        }

        // Cleanup
        foreach ($files as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }
        rmdir($tempDir);

        $this->endMeasurement('File I/O Operations', $iterations);
        return $totalSize;
    }

    // Test 7: Function Call Overhead
    public function testFunctionCalls()
    {
        $this->startMeasurement('Function Call Overhead');

        $iterations = 100000;

        // Define test functions
        $simpleFunc = function ($x) {
            return $x * 2;
        };

        $complexFunc = function ($x, $y, $z) {
            return sqrt($x * $x + $y * $y + $z * $z);
        };

        // Function calls
        for ($i = 0; $i < $iterations; $i++) {
            $result1 = $simpleFunc($i);
            $result2 = $complexFunc($i, $i + 1, $i + 2);
            $result3 = strlen("test string {$i}");
            $result4 = substr("long test string for testing", 0, $i % 20);
            $result5 = array_sum([1, 2, 3, $i]);
        }

        $this->endMeasurement('Function Call Overhead', $iterations);
    }

    // Test 8: Class Operations
    public function testClassOperations()
    {
        $this->startMeasurement('Class Operations');

        $iterations = 10000;

        // Dynamic class creation
        for ($i = 0; $i < $iterations; $i++) {
            $className = "TestClass{$i}";

            // Use anonymous class for this test
            $obj = new class($i) {
                private $id;
                private $data = [];

                public function __construct($id)
                {
                    $this->id = $id;
                    $this->data = range(1, 10);
                }

                public function getId()
                {
                    return $this->id;
                }

                public function process()
                {
                    return array_sum($this->data) * $this->id;
                }

                public function __toString()
                {
                    return "Object_{$this->id}";
                }
            };

            // Method calls
            $id = $obj->getId();
            $result = $obj->process();
            $string = (string)$obj;

            // Property access via reflection
            $reflection = new ReflectionClass($obj);
            $methods = $reflection->getMethods();
        }

        $this->endMeasurement('Class Operations', $iterations);
    }

    // Run all benchmarks
    public function runAllTests()
    {
        echo "Starting comprehensive benchmark suite...\n\n";

        $this->testCpuIntensive();
        $this->testMemoryIntensive();
        $this->testStringOperations();
        $this->testArrayOperations();
        $this->testObjectOperations();
        $this->testFileOperations();
        $this->testFunctionCalls();
        $this->testClassOperations();

        $this->printResults();
    }

    // Print detailed results
    public function printResults()
    {
        echo "\n=== BENCHMARK RESULTS ===\n";
        echo str_repeat("-", 80) . "\n";
        printf(
            "%-30s %15s %15s %15s %10s\n",
            "Test Name",
            "Total Time (ms)",
            "Avg/Iter (ms)",
            "Memory (MB)",
            "Peak (MB)"
        );
        echo str_repeat("-", 80) . "\n";

        $totalTime = 0;
        $totalMemory = 0;
        $maxPeak = 0;

        foreach ($this->results as $testName => $data) {
            printf(
                "%-30s %15.4f %15.6f %15.4f %10.4f\n",
                $testName,
                $data['execution_time_ms'],
                $data['avg_time_per_iteration_ms'],
                $data['memory_used_mb'],
                $data['peak_memory_mb']
            );

            $totalTime += $data['execution_time_ms'];
            $totalMemory += $data['memory_used_mb'];
            $maxPeak = max($maxPeak, $data['peak_memory_mb']);
        }

        echo str_repeat("-", 80) . "\n";
        printf(
            "%-30s %15.4f %15s %15.4f %10.4f\n",
            "TOTAL",
            $totalTime,
            "-",
            $totalMemory,
            $maxPeak
        );
        echo str_repeat("=", 80) . "\n";

        // Export results as JSON for easy comparison
        $this->exportResults();
    }

    private function exportResults()
    {
        $exportData = [
            'timestamp' => date('Y-m-d H:i:s'),
            'php_version' => PHP_VERSION,
            'opcache_enabled' => extension_loaded('Zend OPcache') && opcache_get_status() !== false,
            'memory_limit' => ini_get('memory_limit'),
            'max_execution_time' => ini_get('max_execution_time'),
            'results' => $this->results
        ];

        $filename = 'benchmark_results_' . date('Y-m-d_H-i-s') . '.json';
        file_put_contents($filename, json_encode($exportData, JSON_PRETTY_PRINT));
        echo "\nResults exported to: {$filename}\n";
    }
}

// Usage example
if (php_sapi_name() === 'cli') {
    $benchmark = new PerformanceBenchmark();
    $benchmark->runAllTests();
} else {
    // For web interface
    header('Content-Type: text/plain');
    $benchmark = new PerformanceBenchmark();
    $benchmark->runAllTests();
}
