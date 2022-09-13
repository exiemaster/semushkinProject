<?php
if (empty($_POST["username"])) {
	$strHeading = "<h1>Привет, незнакомец"."</h1>";
}
	else {
		$strHeading = "<h1>Привет, " . $_POST["username"] . "</h1>";
	}	
switch ($_POST["favoritecolor"]) {
	case "r":
		$strBackgroundColor = "rgb(255,0,0)";
		break;
	case "g";
		$strBackgroundColor = "rgb(0,255,0)";
		break;
	case "b":
		$strBackgroundColor = "rgb(0,0,255)";
		break;
	default:
		$strBackgroundColor = "rgb(255,255,255)";
		break;
}
?>
<html>
<head>
	<title>Форма</title>
</head>
<body style="background: <? echo $strBackgroundColor; ?>;">
	<?php echo $strHeading; ?>
</body>
</html>