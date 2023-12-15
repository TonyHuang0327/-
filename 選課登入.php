<?php
session_start();

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpfinalreport');  // 預設使用的資料庫名稱
?>

<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>選課系統登入</FONT></b></h1>

<form action="" method="post" style=": 80%" enctype="multipart/form-data">

    <br/>
    <div style="border-width: 3px ; width: 500px; height: 300px ; padding: 5px; text-align: center; background-color: rgb(41, 105, 176, 0.7);border-radius: 4px;">
    <br/><br/><br/>
    <font size="5">學號: </font><input type='text' name="account" placeholder='輸入您的學號/教師編號' style = "width: 250px; height: 30px">
    <br/><br/><br/>
    <font size="5">密碼: </font><input type='password' name="password" placeholder='輸入您的密碼' style = "width: 250px; height: 30px">
    <br/><br/>
    &emsp;&emsp;&emsp;<input type='checkbox' name="remember" value="1">記住我&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href='忘記密碼.php'>忘記密碼</a>
    <br/><br/><br/>
    <input type='submit' value = '登入' style = "width: 120px; height: 40px">
    </div>
</form>
</CENTER>
<?php
if(isset($_POST["account"]))
    if($_POST["account"]!=null){
		$uId=$_POST["account"];
		$uPwd=$_POST["password"];

        $SQL="SELECT * FROM user WHERE usr_account='$uId' AND usr_passwd='$uPwd'";
        $RSQL="SELECT usr_role FROM user WHERE usr_account='$uId' AND usr_passwd='$uPwd'";
        $result=mysqli_query($link,$SQL);
        $Rresult=mysqli_fetch_array(mysqli_query($link,$RSQL));

        if(mysqli_num_rows($result)==1){
			$_SESSION["login"]="Yes";
			setcookie("UID",$uId,time()+3600);
            if($Rresult[0]==1){
                $_SESSION["role"]="student";
                $_SESSION["ID"]=$uId;
                header('Location: 學生登入成功.php');
            }
            if($Rresult[0]==0){
                $_SESSION["role"]="teacher";
                $_SESSION["ID"]=$uId;
                header('Location: 老師登入成功.php');
            }
		}else{
			echo "帳號或密碼輸入錯誤";
		}
    }else{
		echo "您尚未輸入帳號或密碼！";
	}
else{
	echo "歡迎登入, 請輸入帳號密碼！";
}
?>
</body>
</html>