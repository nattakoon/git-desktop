<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <title>Forecasting</title>
</head>
<body>
                    <nav>
                         <div class="logo">
                                 <a href="#">TAKE LEAVE</a>
                         </div>
                                       <div class="menu-container"> 
                                            <ul class="menu">
                                            <li><a href="Index.html">หน้าหลัก</a></li>
                                            <li><a href="learn.html">ความรู้ทั่วไป</a></li>
                                            <li><a href="page1.html">เข้าสู่ระบบหน้าพยากรณ์</a></li>
                                        </ul></div>

                     </nav>
                 <div class="homepage">
                     <div class='text-container'>
                        <div class="row">
                                <form action="page1.html" method="post" >
                            <div class="form-row"><center>
                                    <h3>ผลการพยากรณ์ <?php //echo $_GET["op1"];?> </h3><br>
                                    <h2><?php
                                                                    $n1=$_GET["op1"];
                                                                    $n2=$_GET["op2"];
                                                                    $n3=$_GET["op3"];
                                                                    $n4=$_GET["op4"];
                                                                    $n5=$_GET["op5"];
                                                                    $arrchoose1 = array('1' => "ต่ำกว่า 1 ปี", '2' => "1-5 ปี", '3' => "6-10 ปี", '4' => "10 ปีขึ้นไป");
                                                                    $arrchoose2 = array('1' => "ไม่มีบุตร", '2' => "มีบุตร");
                                                                    $maxx=max($n1, $n2, $n3, $n4, $n5);
                                
                                                                    if($maxx == $n1 ){
                                                                        echo "<h3>อายุ" .$_GET["a1"]."ปี</h3>";
                                                                        echo "<h3>ประสบการณ์" .$arrchoose1[$_GET["a2"]]."</h3>";
                                                                        echo "<h3>สถานภาพ" .$arrchoose2[$_GET["a8"]]."</h3>";
                                                                        echo "ผลพยากรณ์ที่ได้ ลาน้อยที่สุด<br><br>";
                                                                    
                                                                    }if($maxx == $n2){
                                                                        
                                                                        echo "<h3>อายุ " .$_GET["a1"]."ปี</h3>";
                                                                        echo "<h3>ประสบการณ์" .$arrchoose1[$_GET["a2"]]."</h3>";
                                                                        echo "<h3>สถานภาพ" .$arrchoose2[$_GET["a8"]]."</h3>";
                                                                        echo "ผลพยากรณ์ที่ได้ ลาน้อย<br><br>";

                                                                    }if($maxx == $n3){
                                                                        
                                                                        echo "<h3>อายุ " .$_GET["a1"]."ปี</h3>";
                                                                        echo "<h3>ประสบการณ์" .$arrchoose1[$_GET["a2"]]."</h3>";
                                                                        echo "<h3>สถานภาพ" .$arrchoose2[$_GET["a8"]]."</h3>";
                                                                        echo "ผลพยากรณ์ที่ได้ ลาปานกลาง<br><br>";

                                                                    }if($maxx == $n4){
                                                                        
                                                                        echo "<h3>อายุ " .$_GET["a1"]."ปี</h3>";
                                                                        echo "<h3>ประสบการณ์" .$arrchoose1[$_GET["a2"]]."</h3>";
                                                                        echo "<h3>สถานภาพ" .$arrchoose2[$_GET["a8"]]."</h3>";
                                                                        echo "ผลพยากรณ์ที่ได้ ลามาก<br><br>";

                                                                    }if($maxx == $n5){
                                                                        
                                                                        echo "<h4>อายุ " .$_GET["a1"]."ปี</h4>";
                                                                        echo "<h4>ประสบการณ์" .$arrchoose1[$_GET["a2"]]."</h4>";
                                                                        echo "<h4>สถานภาพ" .$arrchoose2[$_GET["a8"]]."</h4>";
                                                                        echo "ผลพยากรณ์ที่ได้ ลามากที่สุด<br><br>";
                                                                    }?>
                                                                    </h2>
            

                                        <!--         <h3> node1 : <?php echo $_GET["op1"];?></h3>
                                                <h3> node2 : <?php echo $_GET["op2"];?></h3>
                                                <h3> node3 : <?php echo $_GET["op3"];?></h3>
                                                <h3> node4 : <?php echo $_GET["op4"];?></h3>
                                                <h3> node5 : <?php echo $_GET["op5"];?></h3>
                                                <h3> test : <?php echo $maxx;?></h3>
                                        </center>   --> 

    </div>
    </form>
</div>
</div>
                     </div>
                        <div class="button">
                        <center><button type="submit" id="submit-button" onclick="location.href = 'Index.html';" >กลับไปหน้าหลัก</button></center>
                        </div>
    </body>
</html>
