<?php 
session_start();
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
    ?>
<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>結果</FONT></b></h1>
</html>
<?php
    $day=$_POST["dayOfTheWeek"];
    $time=$_POST["whichclass"];
    $sql = "SELECT * FROM class WHERE class_day = '$day' AND (startTime <= '$time' AND endTime >='$time')";
    $result = mysqli_query($link,$sql);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>課程名稱</td> ";
    echo "<td>老師名字</td> ";
    echo "<td>星期</td> ";
    echo "<td>開始節次</td> ";
    echo "<td>結束節次</td> ";
    echo "<td>課程人數</td> ";
    echo "<td>目前選課人數</td> ";
    echo "<td>選課確認</td>";
    echo "<td>退選</td>";
    echo "</tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["class_name"]."</td><td>".$row["class_teacher"]."</td><td>".$row["class_day"]."</td><td>".$row["startTime"]."</td><td>".$row["endTime"]."</td><td>".$row["class_max"]."</td><td>".$row["class_current"]."</td><td><a href = 'confirm.php?class_number=".$row["class_number"]."'>選擇</a></td><td><a href = 'quit_confirm.php?class_number=".$row["class_number"]."'>退選</a></td>";
        echo "</tr>";
    }
    echo "</table>";
?>