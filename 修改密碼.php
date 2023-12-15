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
<h1><b><FONT COLOR='red'>修改密碼</FONT></b></h1>

<form action="確認更改.php" method="post" style=": 80%" enctype="multipart/form-data">

    <br/>
    <div style="border-width: 3px ; width: 500px; height: 300px ; padding: 5px; text-align: center; background-color: rgb(41, 105, 176, 0.7);border-radius: 4px;">
    <br/><br/><br/>
    <font size="5">輸入新密碼: </font><input type='password' name="new_Password1" style = "width: 300px; height: 30px">
    <br/><br/><br/>
    <font size="5">確認新密碼: </font><input type='password' name="new_Password2" style = "width: 300px; height: 30px">
    <br/><br/><br/><br/>
    <input type='submit' value = '送出' style = "border:2px #8F4586 dashed; font-size: 20px; width: 130px; height: 40px; background-color: #FFBB77">
    </div>
</form>
</CENTER>
</body>
</html>