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
	<form>
		<input type="text" name="a" placeholder="Enter A"><br><br>	
		<input type="text" name="b" placeholder="Enter B"><br><br>
		<input type="text" name="c" placeholder="Enter C"><br><br>
		<input type="text" name="x" placeholder="Enter X"><br><br>
		<button name="submit" value="submit">Calculate</button>
			<br>	
	</form>
</body>
</html>
<?php 
 function cp($a1, $b1, $c1){
 	return sqrt($a1) + 3*sqrt($b1) + sin($c1);
 }
 echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('16.09.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b></br>";
 if(isset($_GET["submit"])){
 
 $a = $_GET["a"];
 $b = $_GET["b"];
 $c = $_GET["c"];
 $x = $_GET["x"];
 $i1 = 0;
 while ($i1 < 5) {
 		$i1++;
 		$y1 = cp(sqrt($a), 3*sqrt($b), sin($c)) / (log($x)) / (1/tan($c))+ min($a,$b,$c);
 		echo "<div class='first'><div>Результати з виконанням циклу while:</div> Ітерація $i1 = $y1</div><br>";
 }
 $i2=0;
 while($i2 < 5):
 	$y2 = cp(sqrt($a), 3*sqrt($b), sin($c)) / (log($x)) / (1/tan($c))+ min($a,$b,$c);
 	$i2++;
 ?>
 <div class="second"><div>Результати з виконанням циклу while (альтернативний синтаксис):</div><?php echo "Ітерація ".$i2."=".$y2;?></div><br>
 <?php
endwhile;
$i3 = 0;
 	do{
 		$y3 = cp(sqrt($a), 3*sqrt($b), sin($c)) / (log($x)) / (1/tan($c))+ min($a,$b,$c);
 		$i3++;
 		?>
 		<div class="third"><div>Результати з виконанням циклу do while:</div><?php echo "Ітерація ".$i3."=".$y3;?></div><br>
 		<?php
 	} while($i3 < 5);
 	for ($i4=1; $i4 <= 5; $i4++) { 
 		$y4 = cp(sqrt($a), 3*sqrt($b), sin($c)) / (log($x)) / (1/tan($c))+ min($a,$b,$c);
 		?>
 		<div class="fourth"><div>Результати з виконанням циклу for:</div><?php echo "Ітерація ".$i4."=".$y4;?></div><br>	
 		<?php 
 	}
 	for($i5=1; $i5 <= 5; $i5++){
 		$y5 = cp(sqrt($a), 3*sqrt($b), sin($c)) / (log($x)) / (1/tan($c))+ min($a,$b,$c);
 		?>
 		<div class="fifth"><div>Результати з виконанням циклу for: (альтернативний синтаксис)</div><?php echo "Ітерація ".$i5."=".$y5;?></div><br>	
 		<?php 
 	}
}
?>
