<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лабораторна робота №11</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="operand" placeholder="Enter Operand"><br>	<br>	
		<input type="submit" name="submit" value="Operand">
	</form>
</body>
</html>
<?php 
 echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('08.09.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b>";
 if(isset($_POST['submit'])){
 	$operand = $_POST['operand'];
 	switch ($operand) {
 		case '**':
 			echo "<h1 style='color: green;'>Арифметична операція $operand має найвищий пріоритет</h1>";
 			break;
 		case '*':
 			echo "<h1 style='color: green;'>Арифметична операція $operand має рівний пріоритет</h1>";
 			break;
 		case '/':
 			echo "<h1 style='color: green;'>Арифметична операція $operand має рівний пріоритет</h1>";
 			break;
 		case '%':
 			echo "<h1 style='color: green;'>Арифметична операція $operand має рівний пріоритет</h1>";
 			break;
 		case '+':
 			echo "<h1 style='color: green;'>Арифметична операція $operand має низький пріоритет</h1>";
 			break;
 		case '-':
 			echo "<h1 style='color: green;'>Арифметична операція $operand має низький пріоритет</h1>";
 			break;
 		default:
 			echo "<h1 style='color: red;'>Ви ввели неправильну арифметичну операцію</h1>";
 			break;
 	}
 }
 ?>

