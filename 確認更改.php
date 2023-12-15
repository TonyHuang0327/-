<?php 
session_start();
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
    if($_POST['new_Password1']!=$_POST['new_Password2']){
        echo "<script type='text/javascript'>";
        echo "alert ('密碼不一致');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=修改密碼.php'>";
    }
    else{
        $USRemail=$_SESSION['usrEmail'];
        $newpassword=$_POST["new_Password1"];
        $SQL= "UPDATE user SET usr_passwd='$newpassword'
        WHERE usr_email='$USRemail'";
        $result = mysqli_query($link,$SQL);
        if(mysqli_affected_rows($link)>0){
            echo "<script type='text/javascript'>";
            echo "alert ('資料已更新');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=選課登入.php'>";
            }
        else if(mysqli_affected_rows($link)==0) {
            echo "<script type='text/javascript'>";
            echo "alert ('更新失敗');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url=忘記密碼.php'>";
        }
        else {
            echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
        }
         mysqli_close($link); 
    }
?>