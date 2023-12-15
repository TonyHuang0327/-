<?php 
session_start();
$sessionID=$_SESSION["ID"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
$sql = "INSERT INTO class (class_name,class_day,startTime,endTime,class_teacher)
VALUES ('$_POST["className"]','$_POST["classDay"]','$_POST["startTime"]','$_POST["endTime"]','$sessionID')";
$result = (mysqli_query($link,$sql));
if(mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>";
        echo "alert ('新增課程成功');"; 
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=課程查詢.php'>";
}
?>