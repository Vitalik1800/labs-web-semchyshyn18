<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лабораторна робота №14</title>
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
			height: 159px;
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
	 $a = array(-1.2, 13.8, -5.2);
	 $b = array(6.1, -3.2, 12.1);
	 $c = array(2.2, -4.2, 7.1);
	 $matrix = array_merge($a,$b, $c);
	 $output_mat1 = $matrix[0]."\t".$matrix[1]."\t".$matrix[2]."<br>";
     $output_mat2 = $matrix[3]."\t".$matrix[4]."\t".$matrix[5]."<br>";
     $output_mat3 = $matrix[6]."\t".$matrix[7]."\t".$matrix[8]."<br>";
	 $min_added_element = array_filter($matrix, function($min){
	 	if($min > 1){
	 		return $min;
	 	}
	 });
	 $newmartix = array_product($matrix);
	 $func = array_map(function($newmartix){
	 	return $newmartix * 2.2; // Утворення матриці 2 за допомогою множення на мінімальний додатній елемент матриці 1
	 }, $matrix);
	 $new_mat1 = $func[0]."\t".$func[1]."\t".$func[2]."<br>";
     $new_mat2 = $func[3]."\t".$func[4]."\t".$func[5]."<br>";
     $new_mat3 = $func[6]."\t".$func[7]."\t".$func[8]."<br>";
	 $x = min($min_added_element);
	 $added = array_filter($func, function($k){
	 	return $k > 0;
	 });
	 $minus = array_filter($func, function($k){
	 	return $k < 0;
	 });
	 $product = array_product($added);
	 $sum = array_sum($minus);
	 $sqr = sqrt($product);
	 $sqr3 = -30.36 ** (1/3);
	 $mat = array_map(function($newm){
	 	return $newm*4.84; // Утворення матриці 3 за допомогою множення на мінімальний додатній елемент матриці 2
	 }, $func);
	 $new_matrix1 = $mat[0]."\t".$mat[1]."\t".$mat[2]."<br>";
     $new_matrix2 = $mat[3]."\t".$mat[4]."\t".$mat[5]."<br>";
     $new_matrix3 = $mat[6]."\t".$mat[7]."\t".$mat[8]."<br>";
	 $null = array_filter($mat, function($k1){
	 	return $k1 == 0;
	 });
	 $added_2 = array_filter($mat, function($k){
	 	return $k > 0;
	 });
	 ?>
	 <div class="first">Початкова матриця: <br> <?php echo $output_mat1; echo $output_mat2;
	 echo $output_mat3?></div><br>
	  <div class="second">Мінімальний додатній елемент матриці 1: <?php echo $x;?></div><br>	
	  <div class="third">Добуток додатніх елементів матриці 1: <?php echo $newmartix;?></div><br>	
	  <div class="fourth">Матриця 2: <br> <?php echo $new_mat1; echo $new_mat2;
	 echo $new_mat3?></div><br>
	  <div class="fifth">Додатні елементи матриці 2: <br><?php echo implode(" | ",$added);?></div><br>	
	  <div class="sixth">Від'ємні елементи матриці 2: <br><?php echo implode(" | ", $minus);?></div><br>	
	  <div class="seventh">Добуток додатніх елементів матриці 2: <?php echo $product;?></div><br>
	  <div class="eight">Сума від'ємних елементів матриці 2: <?php echo $sum;?></div><br>
	  <div class="nine">Корінь квадратний з добутку: <?php echo $sqr; ?></div><br>
	   <div class="ten">Корінь кубічний із суми: <?php echo $sqr3;?></div><br>
	   <div class="eleven">Матриця 3: <br> <?php echo $new_matrix1; echo $new_matrix2;
	 echo $new_matrix3?></div><br>
	  <div class="twel">Нульові елементи матриці 3: <?php echo implode("",$null);?></div><br>
	   <div class="t13">Додатні елементи матриці 3: <?php echo implode(" | ", $added_2);?></div><br>
	   
	 <?php   
	?>
</body>
</html>
