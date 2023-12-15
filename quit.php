<?php 
session_start();
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
$sql = "DELETE FROM enroll WHERE user = '$sessionID' AND selected_course = (SELECT class_number FROM class WHERE class_name = '$sessionName');
$result = mysqli_query($link,$sql);
if(mysqli_affected_rows($link)==1){
    echo "<script type='text/javascript'>";
    echo "alert ('退選成功');";
    echo "</script>";
}
    ?>
