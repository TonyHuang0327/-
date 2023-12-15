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
<h1><b><FONT COLOR='red'>選課紀錄</FONT></b></h1>
</html>
<?php
    $history = "SELECT C.class_name,H.success FROM history H,class C WHERE userId = '$sessionID' AND C.class_number = H.courseId";
    $result = mysqli_query($link,$history);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>課程名稱</td> ";
    echo "<td>選課狀態</td> ";
    echo "</tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["class_name"]."</td><td>".$row["success"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>