<?php 
session_start();
$sessionID=$_SESSION["ID"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
    ?>
<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>課表</FONT></b></h1>

</html>
<?php
echo "<table border='1'>";
for($i=0;$i<=8;$i++){
    echo "<tr>";
    echo "<td td width = 150>第 $i 節</td>";
    for($x=1;$x<=5;$x++){
        $class = "SELECT C.class_name FROM class C,enroll E WHERE E.user = '$sessionID' AND E.selected_course = C.class_number AND C.class_day = '$x' AND C.startTime<='$i'AND C.endTime>='$i'";
        $result = mysqli_query($link,$class);
        if($row=mysqli_fetch_assoc($result))
            echo "<td width = 150 height = 80>".$row["class_name"]."<a href = 'quit_confirm.php?class_number=".$row["class_number"]."'>退選</a></td>";
        else if($i==0){
            echo "<td width = 150 height = 80>星期 $x</td>";
        }
        else{
            echo "<td width = 150 height = 80></td>";
        }
    }
    echo "</tr>";
}
    ?>