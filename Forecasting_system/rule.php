<?php

$a1 = $_GET["t1"];
$a2 = $_GET["t2"];
$a3 = $_GET["t3"];
$a4 = $_GET["t4"];
$a5 = $_GET["t5"];
$a6 = $_GET["t6"];
$a7 = $_GET["t7"];
$a8 = $_GET["t8"];
$a9 = $_GET["t9"];
$a10 = $_GET["t10"];
$a11 = $_GET["t11"];
$a12 = $_GET['t12'];
$a13 = $_GET["t13"];


$norm1 = ($a1-39.5)/19.5;
$norm2 = ($a2-2.5)/1.5;
$norm3 = ($a3-2.5)/1.5;
$norm4 = ($a4-3)/2;
$norm5 = ($a5-3)/2;
$norm6 = ($a6-3)/2;
$norm7 = ($a7-2.5)/1.5;
$norm8 = ($a8-1.5)/0.5;
$norm9 = ($a9-2)/1;
$norm10 = ($a10-3)/2;
$norm11 = ($a11-3)/2;
$norm12 = ($a12-3)/2;
$norm13 = ($a13-3)/2;


$p1 = $norm1;
$p2 = $norm2;
$p3 = $norm3;
$p4 = $norm4;
$p5 = $norm5;
$p6 = $norm6;
$p7 = $norm7;
$p8 = $norm8;
$p9 = $norm9;
$p10 = $norm10;
$p11 = $norm11;
$p12 = $norm12;
$p13 = $norm13;
//node5
$resultnode1 = ((($p1 * (-1.23)) + ($p2 * 4.06) + ($p3 * (-1.72)) + ($p4 * 0.48) + ($p5 * 0.82) + ($p6 * 2.70) + ($p7 * 2.19) +
                 ($p8 * 2.89) + ($p9 * 0.55) + ($p10 * 4.62) + ($p11 * 3.04) + ($p12 * 2.44) + ($p13 * 1.04)) +1.36);
//node6
$resultnode2 = ((($p1 * 0.99) + ($p2 * 0.21) + ($p3 * 0.20) + ($p4 * (-0.06)) + ($p5 * 0.06) + ($p6 * 0.78) + ($p7 * (-10.01)) +
                ($p8 * (-0.08)) + ($p9 * 1.10) + ($p10 * 0.22) + ($p11 * 0.93) + ($p12 * (-0.56)) + ($p13 * 0.43)) -5.54);
//node7
$resultnode3 = ((($p1 * 0.10) + ($p2 * 0.27) + ($p3 * (-0.44)) + ($p4 * 0.06) + ($p5 * (-0.39)) + ($p6 * (-0.39)) + ($p7 * (-5.12)) +
                ($p8 * (-0.50)) + ($p9 * (-0.28)) + ($p10 * 0.18) + ($p11 * (-0.48)) + ($p12 * (-0.21)) + ($p13 * 0.03)) +3.23);
//node8
$resultnode4 = ((($p1 * 0.18) + ($p2 * 0.31) + ($p3 * 0.44) + ($p4 * 0.14) + ($p5 * 0.80) + ($p6 * 0.47) + ($p7 * 10.50) +
                ($p8 * (-0.20)) + ($p9 * 0.78) + ($p10 * 0.08) + ($p11 * 0.62) + ($p12 * (-0.17)) + ($p13 * (-0.26))) +0.53);
//node9
$resultnode5 = ((($p1 * (-0.79)) + ($p2 * 1.15) + ($p3 * (-0.57)) + ($p4 * (-0.77)) + ($p5 * (-1.32)) + ($p6 * 1.19) + ($p7 * 4.16) +
                ($p8 * (-1.42)) + ($p9 * (-2.71)) + ($p10 * (-0.53)) + ($p11 * (-1.04)) + ($p12 * (-1.86)) + ($p13 * (-2.99))) +0.15);
//node10
$resultnode6 = ((($p1 * 2.57) + ($p2 * 3.47) + ($p3 * (-3.33)) + ($p4 * 0.88) + ($p5 * (-4.16)) + ($p6 * 4.32) + ($p7 * (-5.62)) +
                ($p8 * 1.62) + ($p9 * (-5.40)) + ($p10 * (-0.91)) + ($p11 * (-0.44)) + ($p12 * 0.29) + ($p13 * 0.29)) -3.90);
//node11
$resultnode7 = ((($p1 * (-0.11)) + ($p2 * (-0.40)) + ($p3 * 0.36) + ($p4 * (-0.03)) + ($p5 * 0.33) + ($p6 * 0.57) + ($p7 * 7.42) +
                ($p8 * 0.19) + ($p9 * 0.20) + ($p10 * (-0.27)) + ($p11 * 0.25) + ($p12 * 0.12) + ($p13 * 0.02)) -4.73);
//node12
$resultnode8 = ((($p1 * (-1.85)) + ($p2 * 3.29) + ($p3 * 2.44) + ($p4 * (-2.72)) + ($p5 * 1.43) + ($p6 * (-3.31)) + ($p7 * (-6.75)) +
                ($p8 * (-1.52)) + ($p9 * (-0.18)) + ($p10 * (-2.80)) + ($p11 * (-0.48)) + ($p12 * 0.27) + ($p13 * (-1.79))) -1.52);
//node13
$resultnode9 = ((($p1 * 1.18) + ($p2 * 7.48) + ($p3 * 4.89) + ($p4 * (-3.53)) + ($p5 * (-0.35)) + ($p6 * 0.77) + ($p7 * (-2.42)) +
                ($p8 * 1.65) + ($p9 * (-0.22)) + ($p10 * (-2.02)) + ($p11 * 4.23) + ($p12 * 4.71) + ($p13 * (-3.11))) +2.30);

$hd1 = 1/(1+pow(2.72,-$resultnode1));
$hd2 = 1/(1+pow(2.72,-$resultnode2));
$hd3 = 1/(1+pow(2.72,-$resultnode3));
$hd4 = 1/(1+pow(2.72,-$resultnode4));
$hd5 = 1/(1+pow(2.72,-$resultnode5));
$hd6 = 1/(1+pow(2.72,-$resultnode6));
$hd7 = 1/(1+pow(2.72,-$resultnode7));
$hd8 = 1/(1+pow(2.72,-$resultnode8));
$hd9 = 1/(1+pow(2.72,-$resultnode9));

//node0
$outl1 = ((($hd1 * (-5.35)) + ($hd2 * 8.32) + ($hd3 * (-0.41)) + ($hd4 * (-2.95)) + ($hd5 * 1.82)+
            ($hd6 * (-5.73)) + ($hd7 * (-2.78)) + ($hd8 * (-6.46)) + ($hd9 * 9.22)) -3.11);

//node1
$outl2 = ((($hd1 * 2.27) + ($hd2 * 4.48) + ($hd3 * (-2.72)) + ($hd4 * (-3.14)) + ($hd5 * (-6.05))+
            ($hd6 * 6.77) + ($hd7 * (-1.80)) + ($hd8 * 6.74) + ($hd9 * (-8.70))) -4.78);

//node2
$outl3 = ((($hd1 * (-0.48)) + ($hd2 * (-4.71)) + ($hd3 * 1.83) + ($hd4 * 8.14) + ($hd5 * 0.11)+
            ($hd6 * (-1.53)) + ($hd7 * (-8.35)) + ($hd8 * (-2.85)) + ($hd9 * 0.22)) -3.99);

//node3
$outl4 = ((($hd1 * (-0.04)) + ($hd2 * (-2.50)) + ($hd3 * (-5.69)) + ($hd4 * 1.81) + ($hd5 * 1.84)+
            ($hd6 * (-2.40)) + ($hd7 * 4.81) + ($hd8 * (-2.71)) + ($hd9 * 0.03)) -2.28);

//node4
$outl5 = ((($hd1 * 0.76) + ($hd2 * (-9.88)) + ($hd3 * 3.85) + ($hd4 * (-9.48)) + ($hd5 * (-0.87))+
            ($hd6 * (-1.39)) + ($hd7 * (-3.63)) + ($hd8 * (-1.71)) + ($hd9 * 0.85)) +2.10);


$outp1 = round(($outl1 * 2) + 3,2); //ลาน้อยที่สุด
$outp2 = round(($outl2 * 2) + 3,2); //ลาน้อย
$outp3 = round(($outl3 * 2) + 3,2); //ลาปานกลาง
$outp4 = round(($outl4 * 2) + 3,2); //ลามาก
$outp5 = round(($outl5 * 2) + 3,2); //ลามากที่สุด

echo "outl1 : ".$outp1. "outl2 : ".$outp2. "outl3 : ".$outp3. "outl4 : ".$outp4. "outp5 : ".$outl5;
header("location: result.php?op1=".$outp1."&op2=".$outp2."&op3=".$outp3."&op4=".$outp4."op5=".$outp5."&a1=".$a1."&a2=".$a2."&a8=".$a8);
?>

