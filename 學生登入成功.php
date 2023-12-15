<?php
session_start();
$sessionID=$_SESSION["ID"];
?>

<html>
<body bgcolor='#FFEBCD'> 
<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a></CENTER>

<div style='float:right;'><br/>Hi! <?php echo $sessionID; ?> 同學&emsp;&emsp;<a href='選課登入.php'>登出</a></div>
<br/>
<CENTER>
<h1><b><FONT COLOR='red' SIZE='7'>登入成功!</FONT></b></h1>
<br>
<marquee bgcolor='yellow'>開始選課日期:XX/XX
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
退選日期:XX/XX
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
現在就放棄的話，暑假就開始了喔!</marquee>
<br>
<a href='課程查詢.php'><font size='5'>進入選課系統</font></a><br>
<br>
<a href='課表.php'><font size='5'>課表查詢</font></a><br>
<br>
<a href='history.php'><font size='5'>選課紀錄</font></a><br>
<br>
<a href='simulator.php'><font size='5'>模擬選課工具</font></a>
</CENTER>
</body>
</html>