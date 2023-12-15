<?php
session_start();
$sessionID=$_SESSION["ID"];
$GETclass_number=$_GET["class_number"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpfinalreport');  // 預設使用的資料庫名稱
$sql = "DELETE FROM class WHERE class_teacher = '$sessionID' AND class_number='$GETclass_number'";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>";
    echo "alert ('刪除成功');";
    echo "</script>";
}