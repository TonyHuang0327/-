<html>

<body bgcolor='#FFEBCD'> 

<CENTER><a href='https://www.nuk.edu.tw/'><img src='https://ep.nuk.edu.tw/images/logo.png' width='30%'></a>
<h1><b><FONT COLOR='red'>新增課程</FONT></b></h1>
<form action="確認新增課程.php" method="post" style=": 80%" enctype="multipart/form-data">

    課程名稱:<br><input type = "text" name = "className"><br>
    課程星期:<select name = "classDay"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select><br>
    課程開始節次:第<select name = "startTime"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option></select>節<br>
    課程結束節次:第<select name = "endTime"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option></select>節<br>
    課程大綱:<br><textarea name = "classSummary" rows="10" cols="30"></textarea><br>
    <input type = "submit">
</form>
</CENTER>


</body>