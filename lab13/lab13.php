<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лабораторна робота №13</title>
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
		.sixth{
			width: 265px;
			height: 159px;
			margin: 0;
			padding: 0;
			background: #787878;
			color: #fff;
		}
		.seven{
			width: 275px;
			height: 169px;
			margin: 0;
			padding: 0;
			background: #858585;
			color: #fff;
		}
		.eight{
			width: 285px;
			height: 179px;
			margin: 0;
			padding: 0;
			background: #929292;
			color: #fff;
		}
	</style>
</head>
<body>
	<img src="img/lab13.png">
</body>
</html>
<?php
 $c = array(0,5,0,-4,0,7,8,0,-5,9);
 function negative($k){
 	return ($k < 0);
 }
 function equalsnull($k){
 	return ($k == 0);
 }?>
 <div class="first">Кількість від'ємних елементів масиву: <?php var_dump(count(array_filter($c, "negative")));?></div><br>
 <div class="second">Кількість нульових елементів масиву: <?php var_dump(count(array_filter($c, "equalsnull")));?></div><br>
 <?php
 function standartDeviation($arr){
 	 //sum of all values
    $sum = array_sum($arr);
    //sum of (square of values)
    $sum_of_square = array_sum(array_map(function($value){return $value*$value;},$arr));
    //X Bar
    $xBar = average($arr);
    //variance
    $variance = ($sum_of_square/count($arr))-pow($xBar,2);
    //standard deviation
    return sqrt($variance);
 }
 function average($array){
    return (array_sum($array)/count($array));
}
function newList($array,$rounded=false,$round_digits = 4){
    $newarray = [];
    $sd = standartDeviation($array);
    $avg = average($array);
    for($i=1;$i<=count($array);$i++){
        if(empty($newarray)){
            array_push($newarray,$avg);
            continue;
        }
        if(!$rounded){
        array_push($newarray,$array[$i-1]+$sd);
        }else{
        array_push($newarray,number_format((float) ($array[$i-1]+$sd), $round_digits, '.', ''));
        }
    }
    return implode(',',$newarray);
}

function getRange($array){
    return $array[0]." to ".$array[count($array)-1];
}
 ?>
 <?php
  $sum_neg = 0;
  foreach($c as $c1){
  	if($c1 < 0){
  		$sum_neg += $c1;
  	}
  }?>
  <div class="third">Сума від'ємних елементів масиву: <?php echo $sum_neg;?></div><br>
  <?php 
  $dob_pos = 1;
  foreach($c as $c2){
  	if($c2 > 0){
  		$dob_pos *= $c2;
  	}
  }
  if($dob_pos > 10 && $dob_pos > $sum_neg){
  	$sum_dob = $sum_neg + $dob_pos;
  }
  ?>
   <div class="fourth">Добуток додатніх елементів масиву: <?php echo $dob_pos;?></div><br>
  <div class="fifth">Сума добутку елементів масиву після додавання добутку додатніх елементів та суми від'ємних елементів масиву: <?php echo $sum_dob;?></div><br>
  <?php 
  	$resultList = newList($c,true,0); 
  ?>
  <div class="sixth">Стандартне відхилення: <?php echo standartDeviation($c);?></div><br>
  <div class="seven">Новий масив: [<?php echo $resultList;?>]</div><br>


  <?php 
  $newarr = array($resultList);
  ?>
  <div class="eight">Кількість від'ємних елементів нового масиву: <?php var_dump(count(array_filter($newarr, "negative")));?></div><br>
  <?php
  
?>
