<?php 
session_start();
$sessionID=$_SESSION["ID"];
$sessionCourse = $_SESSION["courseId"];
$comment = $_POST['comments'];
$rating = $_POST['rating'];
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
    $sql = "UPDATE enroll SET rating = '$rating',comment = '$comment' WHERE user = '$sessionID' AND selected_course = '$sessionCourse'";
    ?>