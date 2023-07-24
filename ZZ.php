<?php
$db=mysqli_connect("localhost", "root","", "CPR");

/* Выбираем данные */
$sql="SELECT name, email, message FROM CZ";
$result=mysqli_query($db, $sql);

/* Разбираем данные и выводим под формой*/
while ($line=mysqli_fetch_row($result)) {
echo "<li><b>name:</b>".$line[0]."<br>";
echo "<b>email:</b>".$line[1]."<br>";
echo "<b>message:</b>".$line[2]."<br></li>";
}
?>