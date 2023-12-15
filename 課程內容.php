<?php
session_start();
$GETclass_number=$_GET["class_number"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpfinalreport');  // 預設使用的資料庫名稱

$sql = "SELECT class_name FROM class WHERE class_number = '$GETclass_number'";
$result=mysqli_fetch_array(mysqli_query($link,$sql));
$sql1 = "SELECT class_teacher FROM class WHERE class_number = '$GETclass_number'";
$result1=mysqli_fetch_array(mysqli_query($link,$sql1));
?>

<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>課程內容</FONT></b></h1>

<div style="border-width: 3px ; width: 1200px; height: 3000px ; padding: 5px; text-align: center; background-color: rgb(232, 255, 232, 0.7);border-radius: 4px;">
<font size="5">課程名稱: <?php echo $result[0];?>
</font></br>
<font size="5">指導老師: <?php echo $result1[0];?>
</font></br>
<font size="5">課程大綱: </font>
<font size="5">課程影片: </font>

</div>

<a href='課程查詢.php'><font size='5'></br>課程查詢</font></a>
</CENTER>
</body>
</html>