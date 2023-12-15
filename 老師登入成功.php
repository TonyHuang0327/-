<?php
session_start();
$sessionID=$_SESSION["ID"];
?>

<html>
<body bgcolor='#FFEBCD'> 
<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a></CENTER>

<div style='float:right;'><br/>Hi! <?php echo $sessionID; ?> 老師&emsp;&emsp;<a href='選課登入.php'>登出</a></div>
<br/>
<CENTER>
<h1><b><FONT COLOR='red' SIZE='7'>登入成功!</FONT></b></h1>
<br>
<marquee bgcolor='yellow'>開始選課日期:XX/XX
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
退選日期:XX/XX
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
老師您好，請選擇動作!</marquee>
<br>
<a href='class.php'><font size='5'>課程資料</font></a><br>
<br>
</CENTER>
</body>
</html>