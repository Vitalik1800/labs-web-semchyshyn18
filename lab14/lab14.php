<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лабораторна робота №14</title>
	<style type="text/css">
		.first{
			width: 235px;
			height: 169px;
			margin: 0;
			padding: 0;
			background: #434343;
			color: #fff;
			border: #434343;
		}
		.second{
			width: 225px;
			height: 139px;
			margin: 0;
			padding: 0;
			background: #505050;
			color: #fff;
			border: #505050;
		}
		.third{
			width: 235px;
			height: 149px;
			margin: 0;
			padding: 0;
			background: #575757;
			color: #fff;
			border: #575757;
		}
		.fourth{
			width: 245px;
			height: 200px;
			margin: 0;
			padding: 0;
			background: #646464;
			color: #fff;
			border: #646464;
		}
		.fifth{
			width: 255px;
			height: 169px;
			margin: 0;
			padding: 0;
			background: #646464;
			color: #fff;
			border: #646464;
		}
		.sixth{
			width: 265px;
			height: 179px;
			margin: 0;
			padding: 0;
			background: #717171;
			color: #fff;
			border: #717171;
		}
		.seventh{
			width: 275px;
			height: 189px;
			margin: 0;
			padding: 0;
			background: #787878;
			color: #fff;
			border: #787878;
		}
		.eight{
			width: 285px;
			height: 199px;
			margin: 0;
			padding: 0;
			background: #858585;
			color: #fff;
			border: #858585;
		}
		.nine{
			width: 295px;
			height: 209px;
			margin: 0;
			padding: 0;
			background: #929292;
			color: #fff;
			border: #929292;
		}
		.ten{
			width: 305px;
			height: 219px;
			margin: 0;
			padding: 0;
			background: #999999;
			color: #fff;
			border: #999999;
		}
		.eleven{
			width: 395px;
			height: 229px;
			margin: 0;
			padding: 0;
			background: #106106;
			color: #fff;
			border: #106106;
		}
		.twel{
			width: 950px;
			height: 236px;
			margin: 0;
			padding: 0;
			background: #113113;
			color: #fff;
			border: #113113;
		}
		.t13{
			width: 1250px;
			height: 243px;
			margin: 0;
			padding: 0;
			background: #120120;
			color: #fff;
			border: #120120;
		}
	</style>
</head>
</html>
<body>  
	<img src="img/1.png" alt=""><br>
	<?php 
		echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
		echo "<br>";
		echo "<b>Дата створення документу = ".date('29.09.2022')."</b>";
		echo "<br>";
		echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
		$matrix = array(
			array(-1.2,13.8,-5.2),
			array(6.1,-3.2,12.1),
			array(2.2,-4.2,7.1)
		);
		$added1 = array_filter($matrix[0], function($min){
			if($min > 1){
				return $min;
			}
		});
		$added2 = array_filter($matrix[1], function($min){
			if($min > 1 && $min < 10){
				return $min;
			}
		});
		$added3 = array_filter($matrix[2], function($min){
			if($min >= 1 && $min < 7){
				return $min;
			}
		});
		$num1 = $added1;
		$num2 = $added2;
		$num3 = $added3;
		$newmartix = array_product($matrix[0]);
		$newmartix1 = array_product($matrix[1]);
		$newmartix2 = array_product($matrix[2]);
		$newmartix3 = $newmartix * $newmartix1 * $newmartix2;

	 $func = array_map(function($newmartix){
	 	return $newmartix * 2.2; // Утворення матриці 2 за допомогою множення на мінімальний додатній елемент матриці 1
	 }, $matrix[0]);
	  $func1 = array_map(function($newmartix){
	 	return $newmartix * 2.2; // Утворення матриці 2 за допомогою множення на мінімальний додатній елемент матриці 1
	 }, $matrix[1]);
	  $func2 = array_map(function($newmartix){
	 	return $newmartix * 2.2; // Утворення матриці 2 за допомогою множення на мінімальний додатній елемент матриці 1
	 }, $matrix[2]);
	  $matrix_combine =  array_merge($func, $func1, $func2);
	  $added = array_filter($matrix_combine, function($k){
	 	return $k > 0;
	 });
	  $minus = array_filter($matrix_combine, function($k){
	 	return $k < 0;
	 });
	  $product = array_product($added);
	  $sum = array_sum($minus);
	   $sqr = sqrt($product);

	 $sqr3 = -30.36 ** (1/3);
		 $func11 = array_map(function($newmartix){
	 	return $newmartix * 4.84; // Утворення матриці 2 за допомогою множення на мінімальний додатній елемент матриці 1
	 }, $matrix[0]);
	  $func22= array_map(function($newmartix){
	 	return $newmartix * 4.84; // Утворення матриці 2 за допомогою множення на мінімальний додатній елемент матриці 1
	 }, $matrix[1]);
	  $func33 = array_map(function($newmartix){
	 	return $newmartix * 4.84; // Утворення матриці 2 за допомогою множення на мінімальний додатній елемент матриці 1
	 }, $matrix[2]);
	  $matrix_combine1 =  array_merge($func11, $func22, $func33);
	  $null = array_filter($matrix_combine1, function($k1){
	 	return $k1 == 0;
	 });
	  $added_2 = array_filter($matrix_combine1, function($k){
	 	return $k > 0;
	 });
	 ?>
	 <div class="first">Початкова матриця: <br> <?php var_dump($matrix);?></div><br>
	  <div class="second">Мінімальний додатній елемент матриці 1 рядок 1: <?php 
	    echo var_dump($num1);
	  ;?></div><br>	
	   <div class="second">Мінімальний додатній елемент матриці 1 рядок 2: <?php 
	    echo var_dump($num2);
	  ;?></div><br>	
	  <div class="third">Мінімальний додатній елемент матриці 1 рядок 3: <?php 
	    echo var_dump($num3);
	  ;?></div><br>		
	  <div class="third">Добуток додатніх елементів матриці 1: <?php echo $newmartix3;?></div><br>	
	  <div class="fourth">Матриця 2: <br> <?php echo var_dump($matrix_combine);?></div><br>
	  <div class="fifth">Додатні елементи матриці 2: <br><?php echo implode(" | ",$added);?></div><br>	
	  <div class="sixth">Від'ємні елементи матриці 2: <br><?php echo implode(" | ", $minus);?></div><br>	
	  <div class="seventh">Добуток додатніх елементів матриці 2: <?php echo $product;?></div><br>
	  <div class="eight">Сума від'ємних елементів матриці 2: <?php echo $sum;?></div><br>
	  <div class="nine">Корінь квадратний з добутку: <?php echo $sqr; ?></div><br>
	   <div class="ten">Корінь кубічний із суми: <?php echo $sqr3;?></div><br>
	   <div class="eleven">Матриця 3: <br> <?php var_dump($matrix_combine1)?></div><br>
	  <div class="twel">Нульові елементи матриці 3: <?php echo implode("",$null);?></div><br>
	   <div class="t13">Додатні елементи матриці 3: <?php echo implode(" | ", $added_2);?></div><br>
	   
	 <?php   
	?>
</body>
</html>
