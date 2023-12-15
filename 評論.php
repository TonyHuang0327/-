<?php 
session_start();
$sessionID=$_SESSION["ID"];
$session = $_SESSION["courseId"];
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'phpFinalReport');  // 預設使用的資料庫名稱
    ?>
    <html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>我要評論</FONT></b></h1>
<form action="傳回評論.php" method="post" style=": 80%" enctype="multipart/form-data">

    <br/>
    <div style="border-width: 3px ; width: 500px; height: 300px ; padding: 5px; text-align: center; background-color: rgb(41, 105, 176, 0.7);border-radius: 4px;">
    <br/><br/>
    <font size="4">評分(1-5): </font><select name='rating' style = "width: 250px; height: 30px"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select><br>
    <font size="4">評論(限30字以內): </font><input type ='text' name = 'comments' style = "width: 250px; height: 30px">
    <br/><br/><br/>
    <input type='submit' value = '確認送出' style = "border:2px #7AFEC6 dashed; font-size: 20px; width: 125px; height: 40px; background-color: #6FB7B7">
    </div>
    
</form>
</CENTER>
<?php
$show = "SELECT rating,comments FROM enroll WHERE user = '$sessionID' AND selected_course = '$sessionCI'";
$show_result = mysqli_query($link,$show);
echo "<table border='1'>";
echo "<tr>";
echo "<td>評分</td> ";
echo "<td>評論</td> ";
echo "</tr>";
while($row=mysqli_fetch_assoc($show_result)){
    echo "<tr>";
    echo "<td>".$row["rating"]."</td><td>".$row["comments"]."</td><td>";
    echo "</tr>";
}
echo "</table>";



?>

</body>
</html>