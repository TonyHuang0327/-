<?php 
session_start();
$sessionID=$_SESSION["ID"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
$GETclass_number=$_GET["class_number"];
$sql = "SELECT * FROM class WHERE class_number = '$GETclass_number' AND class_current = class_max";
$result = mysqli_query($link,$sql);
$checkTime = "SELECT * FROM class WHERE class_number = '$GETclass_number' AND startTime>=(
    SELECT C.startTime FROM class C,enroll E WHERE E.selected_course = C.class_number) AND endTime<=(
    SELECT C.endTime FROM class C,enroll E WHERE E.selected_course = C.class_number)";
$time_result =mysqli_query($link,$checkTime);
$SUC = "INSERT INTO enroll (user,selected_course)
VALUES('$sessionID','$GETclass_number')";
$SUC_result =mysqli_query($link,$SUC);
if(mysqli_num_rows($result)==1){
    echo "<script type='text/javascript'>";
        echo "alert ('人數');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=選課失敗.php'>";
}
else if(mysqli_num_rows($time_result)==1){
    echo "<script type='text/javascript'>";
        echo "alert ('衝堂');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=選課失敗.php'>";
    }
    else {
        if(mysqli_num_rows($SUC_result)==1){
            echo "<script type='text/javascript'>";
                echo "alert ('選課成功');"; 
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=課程查詢.php'>";
        }
    }
?>