# Create output directory
mkdir output

# Build containers
docker build -f Dockerfile.no-opcache -t php84-no-opcache .
docker build -f Dockerfile.with-opcache -t php84-with-opcache .

# Run tests
docker run --rm -v "${PWD}\output:/app/output" php84-no-opcache
docker run --rm -v "${PWD}\output:/app/output" php84-with-opcache