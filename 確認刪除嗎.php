<?php
$GETclass_number=$_GET["class_number"];
$sql = "SELECT class_name FROM class WHERE class_number ='$GETclass_number'";
echo "<script> if(confirm( '確定刪除"$sql"?'))  location.href='老師刪除課程.php';else location.href='老師登入成功.php'; </script>"; 

?>