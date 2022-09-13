<!DOCTYPE html>
<html lang=”ru”>
<head>
<meta http-equiv=”X-UA-Compatible” content=”IE=edge” />
<meta http-equiv=”content-type” content=”text/html; charset=utf-8” />
<title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$i = [1,2,3];
$sum;
$square;
$division;
if ($i > 0) {
	$sum = (pow($i[0], 3) + pow($i[1], 3) + pow($i[2], 3)) - (pow($i[0], 2) + pow($i[1], 2) + pow($i[2], 2));
	echo $sum."___";
	$square = (pow($i[0], 3) + pow($i[1], 3) + pow($i[2], 3)) * (pow($i[0], 2) + pow($i[1], 2) + pow($i[2], 2));
	echo $square."___";
	$division = (pow($i[0], 3) + pow($i[1], 3) + pow($i[2], 3)) / (pow($i[0], 2) + pow($i[1], 2) + pow($i[2], 2));
	echo $division;
}
	else {
		echo "На 0 делить нельзя";
	}
?>
</body>
</html>