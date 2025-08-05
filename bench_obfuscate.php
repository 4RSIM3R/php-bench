<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2025-08-05 14:57:47              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
goto HQVZv;
tKnY6:
goto c6KJw;
goto fkD2n;
iKOWq:
$P7qAS->ioq0_();
goto tKnY6;
iuYLh:
header("\103\x6f\x6e\x74\145\156\x74\x2d\x54\171\160\x65\x3a\x20\x74\x65\x78\164\x2f\160\x6c\141\x69\x6e");
goto HfBTh;
P5BAa:
$P7qAS = new UG0GO();
goto k6P0T;
fkD2n:
YdP3k:
goto P5BAa;
k6P0T:
$P7qAS->IOq0_();
goto WkvZB;
HfBTh:
$P7qAS = new uG0go();
goto iKOWq;
HQVZv:
class Ug0Go
{
    private $Il1hu = array();
    private $RS5Cr;
    private $K4j8W;
    public function __construct()
    {
        goto NMPj8;
        NMPj8:
        ini_set("\155\145\x6d\157\162\x79\x5f\x6c\x69\x6d\x69\164", "\x35\61\62\115");
        goto a5x0w;
        MERi2:
        echo "\x50\x48\x50\x20\x56\145\162\163\151\x6f\x6e\72\40" . PHP_VERSION . "\xa";
        goto m03Ag;
        a5x0w:
        echo "\x3d\75\x3d\40\120\x48\x50\x20\120\x65\x72\146\157\x72\155\x61\156\143\145\x20\102\x65\x6e\x63\150\x6d\x61\x72\x6b\40\123\x75\x69\x74\x65\40\75\75\75\xa";
        goto MERi2;
        MJjx6:
        echo "\115\141\170\40\105\170\145\x63\165\164\x69\x6f\156\x20\x54\151\155\145\x3a\40" . ini_get("\155\141\x78\137\x65\x78\x65\143\165\164\151\157\156\x5f\x74\151\x6d\x65") . "\x73\12\12";
        goto x__Xj;
        ME5u9:
        echo "\115\x65\155\157\162\x79\x20\x4c\151\155\x69\x74\72\40" . ini_get("\x6d\x65\155\x6f\x72\171\137\154\x69\x6d\x69\x74") . "\xa";
        goto MJjx6;
        m03Ag:
        echo "\117\160\x43\141\x63\x68\x65\40\105\x6e\x61\142\154\x65\144\72\40" . (extension_loaded("\132\x65\156\x64\40\117\120\x63\141\x63\150\x65") && opcache_get_status() !== false ? "\131\x65\163" : "\116\157") . "\xa";
        goto ME5u9;
        x__Xj:
    }
    private function imqd0($BWapl)
    {
        goto oupMW;
        D0utm:
        $this->RS5Cr = microtime(true);
        goto cEcH6;
        cEcH6:
        $this->K4j8W = memory_get_usage(true);
        goto PFtBC;
        PFtBC:
        gc_collect_cycles();
        goto CPiRt;
        oupMW:
        echo "\x52\x75\156\x6e\151\x6e\147\72\40{$BWapl}\56\56\x2e\40";
        goto D0utm;
        CPiRt:
    }
    private function DPI37($BWapl, $g2mQ9 = 1)
    {
        goto z76mO;
        m3IQs:
        $this->Il1hu[$BWapl] = ["\145\x78\x65\143\165\164\x69\x6f\156\137\164\x69\x6d\145\x5f\x6d\163" => round($G2ng4, 4), "\x61\166\147\x5f\x74\x69\155\145\x5f\x70\x65\x72\x5f\151\164\x65\162\141\x74\151\x6f\156\137\x6d\163" => round($v19Ub, 4), "\x6d\145\155\157\x72\171\137\x75\x73\145\144\137\142\x79\x74\x65\163" => $OZ4Do, "\155\145\x6d\157\x72\x79\x5f\x75\x73\x65\x64\137\155\x62" => round($OZ4Do / 1024 / 1024, 4), "\160\x65\141\153\x5f\155\x65\155\157\162\171\137\x6d\142" => round($TbU12 / 1024 / 1024, 4), "\151\164\145\x72\x61\x74\x69\157\x6e\163" => $g2mQ9];
        goto USIyP;
        JhkMm:
        $v19Ub = $G2ng4 / $g2mQ9;
        goto m3IQs;
        GDAl9:
        $OZ4Do = max(0, $HEHi9 - $this->K4j8W);
        goto JhkMm;
        oF2bu:
        $HEHi9 = memory_get_usage(true);
        goto uNqqR;
        USIyP:
        echo "\x44\157\156\145\40\x28{$G2ng4}\155\x73\54\40{$this->Il1hu[$BWapl]["\x6d\145\x6d\157\x72\x79\x5f\x75\163\145\144\137\x6d\x62"]}\115\102\51\xa";
        goto qnefi;
        z76mO:
        $gyvV7 = microtime(true);
        goto oF2bu;
        F1gUT:
        $G2ng4 = ($gyvV7 - $this->RS5Cr) * 1000;
        goto GDAl9;
        uNqqR:
        $TbU12 = memory_get_peak_usage(true);
        goto F1gUT;
        qnefi:
    }
    public function SjFhd()
    {
        goto MtAF2;
        XAa0f:
        $BVy45 = true;
        goto BgTqA;
        BgTqA:
        $yGdlz = 2;
        goto LxaT1;
        LxaT1:
        L8pFv:
        goto bxdcW;
        Z2GVC:
        y6TBa:
        goto fdGYf;
        efhK5:
        rMnru:
        goto SPMen;
        bnxhz:
        goto L8pFv;
        goto FgDjn;
        SPMen:
        $LsBHM++;
        goto jJ4mg;
        TBFKd:
        $yGdlz++;
        goto bnxhz;
        A8fSq:
        $BVy45 = false;
        goto vnQr8;
        AWTrB:
        XLykH:
        goto efhK5;
        S0oM_:
        $yGdlz = 0;
        goto iBDaB;
        RXANZ:
        $g3Cnn = 0;
        goto S0oM_;
        tt7up:
        goto JKJ5R;
        goto xeUNL;
        Feggn:
        $g2mQ9 = 100000;
        goto RXANZ;
        bxdcW:
        if (!($yGdlz <= sqrt($LsBHM))) {
            goto k3a9U;
        }
        goto nhI00;
        dttHw:
        $LsBHM = 2;
        goto f0jcV;
        vnQr8:
        goto k3a9U;
        goto J62yH;
        WTRNl:
        return $g3Cnn;
        goto C617d;
        nhI00:
        if (!($LsBHM % $yGdlz == 0)) {
            goto k8y4w;
        }
        goto A8fSq;
        fWzvg:
        $g3Cnn += pow($yGdlz % 100, 2);
        goto N9vKq;
        N9vKq:
        $g3Cnn += log($yGdlz + 1);
        goto reeQ5;
        iuyy8:
        if (!($yGdlz < $g2mQ9)) {
            goto WmRGp;
        }
        goto w4wNG;
        iBDaB:
        JKJ5R:
        goto iuyy8;
        f0jcV:
        G9nVM:
        goto ckEDC;
        U1zgZ:
        if (!$BVy45) {
            goto XLykH;
        }
        goto pDYR4;
        w4wNG:
        $g3Cnn += sqrt($yGdlz) * sin($yGdlz) * cos($yGdlz);
        goto fWzvg;
        fdGYf:
        $this->dPi37("\103\x50\125\x20\111\x6e\164\x65\156\x73\x69\x76\145\40\x4f\x70\x65\x72\141\164\x69\x6f\x6e\x73", $g2mQ9);
        goto WTRNl;
        xeUNL:
        WmRGp:
        goto Wa3iC;
        Wa3iC:
        $gpYUM = [];
        goto dttHw;
        pDYR4:
        $gpYUM[] = $LsBHM;
        goto AWTrB;
        J62yH:
        k8y4w:
        goto Ct1ir;
        reeQ5:
        qD8CI:
        goto dRCn0;
        FgDjn:
        k3a9U:
        goto U1zgZ;
        MtAF2:
        $this->imqd0("\103\x50\x55\x20\111\x6e\164\145\x6e\163\x69\166\145\40\x4f\x70\x65\x72\141\x74\x69\157\156\163");
        goto Feggn;
        jJ4mg:
        goto G9nVM;
        goto Z2GVC;
        Ct1ir:
        X0_4A:
        goto TBFKd;
        ckEDC:
        if (!($LsBHM <= 1000)) {
            goto y6TBa;
        }
        goto XAa0f;
        dRCn0:
        $yGdlz++;
        goto tt7up;
        C617d:
    }
    public function X2tGk()
    {
        goto IWmb0;
        IWmb0:
        $this->ImQd0("\x4d\x65\155\157\x72\x79\x20\x49\156\x74\145\x6e\x73\151\166\145\40\x4f\x70\145\x72\141\x74\x69\157\156\x73");
        goto hGPlu;
        sv7Y_:
        C6LPY:
        goto Fxqze;
        H8qT7:
        $jPQZs = explode("\x20", $ZJI4z);
        goto p3j_f;
        QNYvw:
        unset($GDPlq, $lgNqJ, $ZJI4z, $jPQZs, $BdonT, $yfzXP);
        goto kHJCM;
        hGPlu:
        $g2mQ9 = 10000;
        goto viFsJ;
        RQ1sd:
        $yfzXP = implode("\40", $BdonT);
        goto dojUj;
        Qcm8v:
        $GDPlq[$yGdlz] = range(0, 100);
        goto NPVOe;
        p3j_f:
        $BdonT = array_reverse($jPQZs);
        goto RQ1sd;
        bSD9b:
        K13m8:
        goto f2EQZ;
        f2EQZ:
        if (!($yGdlz < $g2mQ9)) {
            goto C6LPY;
        }
        goto Qcm8v;
        B5WOw:
        $yGdlz = 0;
        goto bSD9b;
        Q6zIg:
        $yGdlz++;
        goto LhQuz;
        AFykl:
        foreach ($GDPlq as $krAvI) {
            $lgNqJ = array_merge($lgNqJ, $krAvI);
            DkRNq:
        }
        goto jW3QT;
        lqfNT:
        sort($lgNqJ);
        goto UDRwA;
        Fxqze:
        $lgNqJ = [];
        goto AFykl;
        dojUj:
        $this->DPI37("\115\145\x6d\157\x72\x79\40\111\x6e\164\x65\156\x73\151\x76\x65\x20\x4f\x70\145\x72\x61\x74\151\157\x6e\163", $g2mQ9);
        goto QNYvw;
        jW3QT:
        nMVPq:
        goto lqfNT;
        NPVOe:
        $GDPlq[$yGdlz] = array_map(function ($VlYe7) use ($yGdlz) {
            return $VlYe7 * $yGdlz * rand(1, 100);
        }, $GDPlq[$yGdlz]);
        goto OnOol;
        UDRwA:
        $ZJI4z = str_repeat("\114\157\x72\x65\x6d\x20\x69\x70\x73\x75\155\40\144\157\154\x6f\162\40\163\151\x74\40\141\155\x65\164\x2c\x20\143\157\x6e\x73\x65\143\x74\x65\164\x75\x72\40\x61\144\x69\x70\151\163\x63\x69\156\147\x20\x65\x6c\151\164\56\x20", 10000);
        goto H8qT7;
        viFsJ:
        $GDPlq = [];
        goto B5WOw;
        OnOol:
        cQEjU:
        goto Q6zIg;
        LhQuz:
        goto K13m8;
        goto sv7Y_;
        kHJCM:
    }
    public function aPFvJ()
    {
        goto Ikl0f;
        iURkw:
        if (!($yGdlz < $g2mQ9)) {
            goto p9zgQ;
        }
        goto uKue5;
        JgfyN:
        $FEhuQ = [];
        goto KdLl9;
        KdLl9:
        $yGdlz = 0;
        goto wH0At;
        yTj8W:
        $Xg29j = "\57\134\x62\x5c\167\173\64\x2c\x7d\x5c\x62\57";
        goto LDds_;
        v7HEX:
        $cLLSz = "\x54\x68\x65\40\x71\x75\151\x63\x6b\x20\142\x72\x6f\167\156\40\146\x6f\170\40\x6a\165\x6d\x70\163\x20\157\166\x65\162\40\x74\x68\145\x20\154\141\x7a\171\x20\x64\x6f\147";
        goto JgfyN;
        V3C0L:
        $g2mQ9 = 50000;
        goto v7HEX;
        Ifh2I:
        $PVr50 = strtoupper($xa_Kb);
        goto d5hjz;
        uKue5:
        $xa_Kb = $cLLSz . "\40\x2d\40" . $yGdlz;
        goto Ifh2I;
        sTWf8:
        $FEhuQ[] = $HEEw0;
        goto Zseby;
        WJ3Iz:
        return count($FEhuQ);
        goto Hp9uo;
        wgc_5:
        $HEEw0 = md5($DlypW);
        goto QVY7U;
        Pko8Q:
        $this->dPI37("\x53\164\162\151\156\x67\x20\x4f\160\x65\x72\141\164\x69\157\156\x73", $g2mQ9);
        goto WJ3Iz;
        Fcpj6:
        $yGdlz++;
        goto dAH2V;
        wH0At:
        laoNC:
        goto iURkw;
        LDds_:
        preg_match_all($Xg29j, $DlypW, $IZNft);
        goto wgc_5;
        HJhbI:
        IXVkA:
        goto Fcpj6;
        Ikl0f:
        $this->Imqd0("\x53\164\162\x69\x6e\x67\x20\117\x70\145\162\x61\x74\151\x6f\156\163");
        goto V3C0L;
        d5hjz:
        $TNifT = strtolower($PVr50);
        goto krI9c;
        Zseby:
        xNOT7:
        goto HJhbI;
        QVY7U:
        if (!($yGdlz % 10000 == 0)) {
            goto xNOT7;
        }
        goto sTWf8;
        jAtMR:
        p9zgQ:
        goto Pko8Q;
        dAH2V:
        goto laoNC;
        goto jAtMR;
        krI9c:
        $DlypW = str_replace("\x66\157\170", "\x63\141\x74", $TNifT);
        goto yTj8W;
        Hp9uo:
    }
    public function Gqy93()
    {
        goto RLyP9;
        UHR3t:
        if (!($yGdlz < $g2mQ9)) {
            goto go5RS;
        }
        goto Rui08;
        shWjm:
        $yGdlz++;
        goto mKESG;
        wrqHJ:
        $g2mQ9 = 10000;
        goto Rbta9;
        PfOuS:
        $tmUL4 = array_map(function ($VlYe7) {
            return $VlYe7 * 2;
        }, $ed423);
        goto zybtt;
        yjSgZ:
        $ed423 = array_filter($ka4b2, function ($VlYe7) {
            return $VlYe7 % 2 == 0;
        });
        goto PfOuS;
        E7HRB:
        ClgKC:
        goto shWjm;
        fqeuj:
        rsort($ka4b2);
        goto yjSgZ;
        DT7qA:
        shuffle($h02OF);
        goto jfa1y;
        Omf2L:
        $yGdlz = 0;
        goto wIdnW;
        MTGU6:
        $Izurd = array_search(500, $ka4b2);
        goto JuHx7;
        jfa1y:
        $ka4b2 = $h02OF;
        goto kW_Jp;
        wIdnW:
        vcWUU:
        goto UHR3t;
        mKESG:
        goto vcWUU;
        goto od6pB;
        Rbta9:
        $KQ6Uh = range(1, 1000);
        goto Omf2L;
        zybtt:
        $vkMMw = array_reduce($tmUL4, function ($Vq6v3, $m5Jqz) {
            return $Vq6v3 + $m5Jqz;
        }, 0);
        goto MTGU6;
        od6pB:
        go5RS:
        goto fDxQQ;
        RLyP9:
        $this->imQD0("\101\162\162\x61\171\40\x4f\160\145\x72\141\164\151\x6f\x6e\x73");
        goto wrqHJ;
        kW_Jp:
        sort($ka4b2);
        goto fqeuj;
        fDxQQ:
        $this->dPI37("\101\x72\x72\141\x79\x20\117\160\x65\162\x61\x74\x69\157\x6e\163", $g2mQ9);
        goto JK12D;
        JuHx7:
        $uMF6O = in_array(750, $ka4b2);
        goto E7HRB;
        Rui08:
        $h02OF = $KQ6Uh;
        goto DT7qA;
        JK12D:
    }
    public function FbdCb()
    {
        goto AdX10;
        L1lsG:
        $e74u5 = new stdClass();
        goto TnGUn;
        ROlEW:
        c1fLn:
        goto c3IIF;
        leJ3p:
        $YJSwj = [];
        goto c4Nph;
        zahbT:
        $WqAwC = unserialize($ggJRM);
        goto O1mxX;
        goTf6:
        $YJSwj[] = $e74u5;
        goto EW02N;
        TnGUn:
        $e74u5->id = $yGdlz;
        goto LbWgr;
        c3_pi:
        Wb91Q:
        goto RWMx2;
        bD4Kq:
        foreach ($YJSwj as $e74u5) {
            goto pAOk9;
            pAOk9:
            $e74u5->HOVrx = true;
            goto rK_Bm;
            rK_Bm:
            $e74u5->OxmMC = md5($e74u5->name . $e74u5->value);
            goto bSgrN;
            bSgrN:
            lIsPr:
            goto CGume;
            CGume:
        }
        goto c3_pi;
        LbWgr:
        $e74u5->name = "\117\x62\152\x65\143\x74\x5f{$yGdlz}";
        goto lnDzd;
        FWWWc:
        $this->dpI37("\x4f\142\x6a\x65\x63\164\40\117\x70\x65\162\x61\164\151\x6f\156\x73", $g2mQ9);
        goto J9NTm;
        h7och:
        $e74u5->data = ["\x74\x79\x70\145" => "\x74\x65\163\x74", "\x63\141\x74\x65\147\x6f\162\x79" => $yGdlz % 10, "\x61\143\164\151\x76\x65" => $yGdlz % 2 == 0];
        goto goTf6;
        eRUhN:
        $yGdlz++;
        goto GutJJ;
        KiRE4:
        $e74u5->rsmlt = time();
        goto h7och;
        jiNo3:
        mXG_f:
        goto bD4Kq;
        J9NTm:
        unset($YJSwj, $ggJRM, $WqAwC, $dKekh, $HsVWv);
        goto vT3Ox;
        O1mxX:
        $dKekh = json_encode($YJSwj);
        goto PEbtm;
        c3IIF:
        if (!($yGdlz < $g2mQ9)) {
            goto mXG_f;
        }
        goto L1lsG;
        c4Nph:
        $yGdlz = 0;
        goto ROlEW;
        RWMx2:
        $ggJRM = serialize($YJSwj);
        goto zahbT;
        AdX10:
        $this->iMqd0("\x4f\142\x6a\x65\x63\x74\x20\x4f\160\145\x72\x61\x74\151\x6f\x6e\163");
        goto QbznH;
        GutJJ:
        goto c1fLn;
        goto jiNo3;
        PEbtm:
        $HsVWv = json_decode($dKekh);
        goto FWWWc;
        EW02N:
        p1InT:
        goto eRUhN;
        QbznH:
        $g2mQ9 = 20000;
        goto leJ3p;
        lnDzd:
        $e74u5->value = rand(1, 1000);
        goto KiRE4;
        vT3Ox:
    }
    public function Qp8NY()
    {
        goto qZifh;
        MBc5T:
        $this->dpI37("\106\x69\x6c\x65\40\111\x2f\117\40\117\160\145\162\141\164\151\157\156\x73", $g2mQ9);
        goto KnovZ;
        JIMdw:
        $g2mQ9 = 1000;
        goto d8dAc;
        YKgtb:
        $QvvKw = 0;
        goto MVgay;
        r3hzz:
        vHeWp:
        goto fkE6W;
        cpdVh:
        B3MSG:
        goto YKgtb;
        d8dAc:
        $BAQUf = sys_get_temp_dir() . "\57\160\x68\160\137\142\145\x6e\143\150\155\141\x72\153\137" . uniqid();
        goto ii6Bm;
        Fx4RQ:
        goto WQP_p;
        goto cpdVh;
        bKmev:
        foreach ($ErwmL as $n0YGH) {
            goto XKXFX;
            Vyuo2:
            ZAafg:
            goto kUxlt;
            muT91:
            $qWasR = count($SBAJJ);
            goto Vyuo2;
            XKXFX:
            $SBAJJ = file($n0YGH, FILE_IGNORE_NEW_LINES);
            goto muT91;
            kUxlt:
        }
        goto ULsmK;
        ULsmK:
        d45tK:
        goto NhNrp;
        MVgay:
        foreach ($ErwmL as $n0YGH) {
            goto NnUS4;
            drIsG:
            hi5FS:
            goto RO_9v;
            NnUS4:
            $dkhnH = file_get_contents($n0YGH);
            goto lbN5m;
            D10i_:
            $DmqLn = filemtime($n0YGH);
            goto drIsG;
            lbN5m:
            $QvvKw += strlen($dkhnH);
            goto epdJI;
            epdJI:
            $y2ezT = filesize($n0YGH);
            goto D10i_;
            RO_9v:
        }
        goto fPlD7;
        YM6gX:
        $yGdlz++;
        goto Fx4RQ;
        iklJ3:
        VR20r:
        goto YM6gX;
        ecFba:
        $ErwmL[] = $zxuHP;
        goto iklJ3;
        KnovZ:
        return $QvvKw;
        goto p2Y3P;
        Ee33L:
        $dkhnH = str_repeat("\114\x69\x6e\145\40{$yGdlz}\72\x20\x4c\x6f\162\x65\155\40\151\160\x73\x75\x6d\x20\x64\157\154\157\162\40\x73\151\164\40\x61\155\145\164\56\xa", 100);
        goto X08Sf;
        fkE6W:
        $ErwmL = [];
        goto wjacx;
        gkNh_:
        WQP_p:
        goto H3FCS;
        mps7m:
        rmdir($BAQUf);
        goto MBc5T;
        NhNrp:
        foreach ($ErwmL as $n0YGH) {
            goto N5V8V;
            puBjC:
            cv_ex:
            goto q8w_q;
            N5V8V:
            if (!file_exists($n0YGH)) {
                goto cv_ex;
            }
            goto u2tra;
            q8w_q:
            JEf70:
            goto kS0tL;
            u2tra:
            unlink($n0YGH);
            goto puBjC;
            kS0tL:
        }
        goto ldk0Z;
        H3FCS:
        if (!($yGdlz < $g2mQ9)) {
            goto B3MSG;
        }
        goto e81tD;
        X08Sf:
        file_put_contents($zxuHP, $dkhnH);
        goto ecFba;
        ldk0Z:
        o1JQu:
        goto mps7m;
        wjacx:
        $yGdlz = 0;
        goto gkNh_;
        qZifh:
        $this->imQD0("\x46\151\x6c\145\40\x49\57\x4f\40\117\160\145\162\141\164\x69\157\x6e\x73");
        goto JIMdw;
        ii6Bm:
        if (is_dir($BAQUf)) {
            goto vHeWp;
        }
        goto yXM2z;
        fPlD7:
        dLfEb:
        goto bKmev;
        yXM2z:
        mkdir($BAQUf, 0777, true);
        goto r3hzz;
        e81tD:
        $zxuHP = $BAQUf . "\x2f\x74\145\163\x74\x5f\x66\x69\154\145\x5f{$yGdlz}\x2e\164\170\164";
        goto Ee33L;
        p2Y3P:
    }
    public function Ar3xA()
    {
        goto C4lWJ;
        jWg8_:
        goto V2K1w;
        goto H4x35;
        QVulk:
        $g2mQ9 = 100000;
        goto ej6Pg;
        PKzke:
        $WAp1O = $iX3e3($yGdlz, $yGdlz + 1, $yGdlz + 2);
        goto WVVXl;
        MywaW:
        $hYdiR = $D0zZT($yGdlz);
        goto PKzke;
        lyAli:
        $V1vzj = array_sum([1, 2, 3, $yGdlz]);
        goto umvh5;
        KAvQA:
        V2K1w:
        goto Pf3Ne;
        H4x35:
        aKOwJ:
        goto wmOEe;
        wQTwJ:
        $yGdlz = 0;
        goto KAvQA;
        HzABw:
        $iX3e3 = function ($VlYe7, $VGBHn, $G8vp2) {
            return sqrt($VlYe7 * $VlYe7 + $VGBHn * $VGBHn + $G8vp2 * $G8vp2);
        };
        goto wQTwJ;
        myd2I:
        $yGdlz++;
        goto jWg8_;
        LWtR6:
        $QGJH2 = substr("\x6c\x6f\x6e\147\40\164\145\x73\x74\40\163\164\162\151\156\x67\40\146\x6f\x72\x20\164\x65\163\x74\151\x6e\x67", 0, $yGdlz % 20);
        goto lyAli;
        umvh5:
        Gvlj9:
        goto myd2I;
        wmOEe:
        $this->DpI37("\x46\x75\x6e\143\x74\151\x6f\156\x20\103\x61\x6c\154\x20\x4f\166\145\x72\x68\x65\x61\144", $g2mQ9);
        goto GM2Wz;
        WVVXl:
        $LviPB = strlen("\x74\145\x73\164\40\x73\164\x72\x69\156\147\x20{$yGdlz}");
        goto LWtR6;
        C4lWJ:
        $this->imQD0("\x46\165\156\143\x74\151\x6f\x6e\40\x43\x61\154\x6c\40\117\x76\x65\x72\x68\145\x61\144");
        goto QVulk;
        ej6Pg:
        $D0zZT = function ($VlYe7) {
            return $VlYe7 * 2;
        };
        goto HzABw;
        Pf3Ne:
        if (!($yGdlz < $g2mQ9)) {
            goto aKOwJ;
        }
        goto MywaW;
        GM2Wz:
    }
    public function e11cD()
    {
        goto a5PVp;
        ok7_s:
        $Mf8KL = $e74u5->getId();
        goto SwtL4;
        Koz2A:
        $yGdlz = 0;
        goto qgtl8;
        iVOo6:
        yWntu:
        goto epUEl;
        UQZjb:
        $yGdlz++;
        goto kMtyi;
        qgtl8:
        wC2vD:
        goto jas5c;
        b89dc:
        $vYjb0 = (string) $e74u5;
        goto PWe41;
        SwtL4:
        $g3Cnn = $e74u5->K4shf();
        goto b89dc;
        jas5c:
        if (!($yGdlz < $g2mQ9)) {
            goto yWntu;
        }
        goto zmw0z;
        zmw0z:
        $Fgc66 = "\x54\145\x73\x74\x43\154\141\163\x73{$yGdlz}";
        goto wE7Ft;
        kMtyi:
        goto wC2vD;
        goto iVOo6;
        PWe41:
        $CbuVP = new ReflectionClass($e74u5);
        goto JCx1z;
        wE7Ft:
        $e74u5 = new class($yGdlz) {
            private $id;
            private $data = array();
            public function __construct($Mf8KL)
            {
                $this->id = $Mf8KL;
                $this->data = range(1, 10);
            }
            public function getId()
            {
                return $this->id;
            }
            public function k4sHf()
            {
                return array_sum($this->data) * $this->id;
            }
            public function __toString()
            {
                return "\117\142\152\x65\x63\164\x5f{$this->id}";
            }
        };
        goto ok7_s;
        JCx1z:
        $GpysK = $CbuVP->getMethods();
        goto rnUWz;
        epUEl:
        $this->dpi37("\103\154\141\163\163\x20\x4f\160\x65\162\141\164\151\157\x6e\163", $g2mQ9);
        goto zACxz;
        rnUWz:
        gjF1P:
        goto UQZjb;
        a5PVp:
        $this->IMqd0("\103\154\141\x73\x73\x20\117\160\145\x72\x61\164\151\x6f\x6e\163");
        goto A0qgF;
        A0qgF:
        $g2mQ9 = 10000;
        goto Koz2A;
        zACxz:
    }
    public function ioQ0_()
    {
        goto erSmk;
        tFIqO:
        $this->ar3Xa();
        goto Fld8f;
        VmEKU:
        $this->X2tgK();
        goto QrSd_;
        YIJq1:
        $this->sjFhD();
        goto VmEKU;
        m2SUV:
        $this->qP8ny();
        goto tFIqO;
        QrSd_:
        $this->APfVJ();
        goto gDabs;
        ME3D_:
        $this->FbdCb();
        goto m2SUV;
        yUz2D:
        $this->cPA5x();
        goto jsVya;
        Fld8f:
        $this->E11cD();
        goto yUz2D;
        erSmk:
        echo "\123\x74\141\x72\x74\x69\156\147\x20\143\157\x6d\x70\x72\145\x68\145\156\163\151\166\145\40\142\x65\x6e\x63\x68\155\141\x72\x6b\x20\x73\165\151\x74\145\56\56\56\xa\12";
        goto YIJq1;
        gDabs:
        $this->GqY93();
        goto ME3D_;
        jsVya:
    }
    public function cPA5X()
    {
        goto IumH6;
        fPe1F:
        $this->hAjQD();
        goto ta3a9;
        nhsGZ:
        vstp7:
        goto DhF84;
        sUUMq:
        echo str_repeat("\x2d", 80) . "\xa";
        goto FxKqq;
        sB2qa:
        $t9rwJ = 0;
        goto or9yv;
        IpGZI:
        printf("\x25\55\x33\60\x73\40\45\x31\65\x2e\x34\146\x20\x25\x31\65\x73\x20\x25\61\x35\56\64\x66\40\45\61\60\56\x34\x66\xa", "\x54\117\124\x41\x4c", $t9rwJ, "\55", $MKXH2, $iiXiY);
        goto U3msq;
        or9yv:
        $MKXH2 = 0;
        goto WhgmS;
        GRRSW:
        foreach ($this->Il1hu as $BWapl => $KQ6Uh) {
            goto gSJeB;
            ynOUq:
            pwX9Q:
            goto pG_1h;
            gSJeB:
            printf("\x25\55\x33\x30\163\x20\x25\61\65\x2e\x34\146\x20\x25\x31\65\x2e\x36\146\40\45\61\x35\56\x34\146\40\x25\61\60\x2e\x34\146\12", $BWapl, $KQ6Uh["\x65\170\145\143\165\164\x69\x6f\x6e\x5f\x74\x69\155\x65\x5f\x6d\163"], $KQ6Uh["\x61\166\x67\x5f\x74\x69\155\x65\137\x70\145\162\137\151\164\x65\162\141\x74\151\157\156\137\155\x73"], $KQ6Uh["\x6d\145\x6d\157\162\x79\137\x75\x73\x65\144\137\155\142"], $KQ6Uh["\x70\145\x61\153\137\x6d\145\155\157\x72\x79\x5f\155\x62"]);
            goto C3HfJ;
            C3HfJ:
            $t9rwJ += $KQ6Uh["\x65\170\x65\143\x75\164\151\x6f\156\x5f\x74\151\x6d\145\x5f\x6d\x73"];
            goto WBMwa;
            WBMwa:
            $MKXH2 += $KQ6Uh["\x6d\x65\x6d\x6f\x72\x79\137\165\x73\x65\x64\137\155\142"];
            goto fm7bj;
            fm7bj:
            $iiXiY = max($iiXiY, $KQ6Uh["\160\145\x61\153\x5f\x6d\145\x6d\157\162\x79\137\155\x62"]);
            goto ynOUq;
            pG_1h:
        }
        goto nhsGZ;
        U3msq:
        echo str_repeat("\75", 80) . "\12";
        goto fPe1F;
        WhgmS:
        $iiXiY = 0;
        goto GRRSW;
        zjZmS:
        echo str_repeat("\x2d", 80) . "\12";
        goto sB2qa;
        FxKqq:
        printf("\x25\x2d\63\x30\x73\x20\x25\61\x35\x73\x20\x25\x31\x35\163\40\x25\x31\x35\x73\x20\45\61\x30\x73\12", "\124\x65\x73\164\x20\x4e\x61\155\x65", "\x54\157\x74\x61\154\40\x54\151\x6d\145\40\x28\x6d\163\51", "\101\x76\147\x2f\x49\164\x65\x72\40\x28\x6d\x73\51", "\115\145\x6d\157\162\x79\x20\x28\115\102\x29", "\120\x65\x61\x6b\x20\x28\115\x42\51");
        goto zjZmS;
        IumH6:
        echo "\12\x3d\x3d\75\40\x42\105\116\x43\x48\115\101\x52\x4b\40\x52\105\123\125\x4c\124\x53\40\75\x3d\75\12";
        goto sUUMq;
        DhF84:
        echo str_repeat("\55", 80) . "\12";
        goto IpGZI;
        ta3a9:
    }
    private function hajqD()
    {
        goto KdOPA;
        H1szR:
        $zxuHP = "\142\x65\x6e\x63\150\155\x61\x72\x6b\x5f\x72\x65\x73\x75\x6c\x74\163\137" . date("\131\x2d\x6d\55\144\137\x48\x2d\x69\55\163") . "\56\152\x73\157\156";
        goto GhasY;
        lT6Hk:
        echo "\12\122\145\x73\165\x6c\164\163\x20\x65\x78\160\x6f\162\x74\145\x64\x20\164\157\72\x20{$zxuHP}\xa";
        goto kh5K5;
        GhasY:
        file_put_contents($zxuHP, json_encode($yx3tj, JSON_PRETTY_PRINT));
        goto lT6Hk;
        KdOPA:
        $yx3tj = ["\x74\151\x6d\x65\x73\164\x61\155\160" => date("\x59\55\x6d\x2d\x64\x20\110\72\x69\72\163"), "\160\x68\x70\x5f\166\x65\162\163\151\157\x6e" => PHP_VERSION, "\x6f\160\x63\x61\x63\x68\145\137\x65\x6e\141\142\154\145\x64" => extension_loaded("\x5a\x65\x6e\x64\x20\x4f\120\143\x61\143\x68\145") && opcache_get_status() !== false, "\155\x65\x6d\x6f\162\x79\x5f\x6c\151\155\x69\x74" => ini_get("\x6d\x65\x6d\x6f\x72\x79\x5f\154\151\x6d\x69\164"), "\x6d\141\170\137\145\x78\x65\x63\x75\164\151\x6f\x6e\137\x74\x69\x6d\145" => ini_get("\155\141\170\x5f\x65\x78\x65\143\165\164\x69\x6f\x6e\137\164\x69\155\x65"), "\162\x65\x73\165\x6c\164\x73" => $this->Il1hu];
        goto H1szR;
        kh5K5:
    }
}
goto cwrSu;
cwrSu:
if (php_sapi_name() === "\143\154\151") {
    goto YdP3k;
}
goto iuYLh;
WkvZB:
c6KJw:
