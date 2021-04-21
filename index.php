<!DOCTYPE html>
<html>
<head>
	<title>Homework 1</title>
</head>
<body>
<center>
<?php
    //Задание 1
	$days = $_GET["days"] ?? 0;
	$sec = $days * 60 * 60 * 24;
	echo "<h1>In " . $days . " day(s) - " . $sec." seconds.</h1>" . "<br>";

    //Задание 2
	echo "<h2>Welcome ". $_POST['last_name']." ". $_POST['first_name']." ". $_POST['patronymic']."</h2>";

?>
    <form action = "" method = "POST">
            First name: <input type = "text" name = "first_name" /> <br>
            Last name : <input type = "text" name = "last_name" /> <br>
            Patronymic: <input type = "text" name = "patronymic" />  <br><br>
            <input type = "submit" />
    </form><br><br><br>
<?php //Задание 3
$array = array();
for($i=0; $i<50; $i++)
{
    $array[$i] = rand(1, 1000000);
}
echo "Max ".max($array).'<br>';
echo "Min ".min($array).'<br>';
$a = array_sum($array);
echo "Avg ".$a/$i."<br>";

    //Задание 4 Работает через параметр $_GET и через input

echo ' 
    <form action = "" method = "GET"><br>
    To reverse: <input type = "text" name = "reverse" /> <br><br>
    <input type = "submit" />
    </form>
    ';
$reverse = $_GET['reverse'];
echo strrev($reverse);
?>

</center>
</body>
</html>