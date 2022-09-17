<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лабораторна робота №12</title>
	<style type="text/css">
		.first{
			width: 215px;
			height: 129px;
			margin: 0;
			padding: 0;
			background: #434343;
			color: #fff;
			border: #434343;
		}

		.second{
			width: 225px;
			height: 134px;
			margin: 0;
			padding: 0;
			background: #505050;
			color: #fff;
		}

		.third{
			width: 235px;
			height: 139px;
			margin: 0;
			padding: 0;
			background: #575757;
			color: #fff;
		}

		.fourth{
			width: 245px;
			height: 144px;
			margin: 0;
			padding: 0;
			background: #646464;
			color: #fff;
		}

		.fifth{
			width: 255px;
			height: 149px;
			margin: 0;
			padding: 0;
			background: #717171;
			color: #fff;
		}
	</style>
</head>
<body>
	<img src="img/1.png" alt="">
	<form action="" method="post">
		<input type="text" name="a" placeholder="Enter A"><br><br>	
		<input type="text" name="b" placeholder="Enter B"><br><br>
		<input type="text" name="c" placeholder="Enter C"><br><br>
		<input type="text" name="x" placeholder="Enter X"><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>
<?php 
 echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('16.09.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b></br>";
 $a = $_POST['a'];
 $b = $_POST['b'];
 $c = $_POST['c'];
 $x = $_POST['x'];
 $i1 = 0;
 while ($i1 < 5) {
 		$i1++;
 		$y1 = $c * pi(sqrt($a), 3*sqrt($b), sin($c)) / (log($x)) / (1/tan($c))+ min($a,$b,$c);
 		echo "<div class='first'><div>Результати з виконанням циклу while (альтернативний синтаксис):</div> Ітерація $i1 = $y1</div><br>";
 }
?>
