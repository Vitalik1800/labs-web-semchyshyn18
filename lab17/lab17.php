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
			border: #505050;
		}
		.third{
			width: 235px;
			height: 139px;
			margin: 0;
			padding: 0;
			background: #575757;
			color: #fff;
			border: #575757;
		}
		.fourth{
			width: 245px;
			height: 144px;
			margin: 0;
			padding: 0;
			background: #646464;
			color: #fff;
			border: #646464;
		}
</style>
<img src="1.png" alt=""><br>
<form action="" method="post">
	<br><textarea name="first" id="" placeholder="Введіть дані для першого файлу" cols="30" rows="5"></textarea><br><br>
	<input type="submit" name="submit1">
</form>
<form action="" method="post">
	<textarea name="second" id="" placeholder="Введіть дані для другого файлу" cols="30" rows="5"></textarea><br><br>
	<input type="submit" name="submit2">
</form>
<form action="" method="post">
	<textarea name="third" id="" placeholder="Введіть дані для третього файлу" cols="30" rows="5"></textarea><br><br>
	<input type="submit" name="submit3">
</form>
<form action="" method="post">
	<textarea name="all" id="" placeholder="Введіть дані для з першої, другої, третьої форми" cols="30" rows="5"></textarea><br><br>
	<input type="submit" name="submit4">
</form>

<?php
 echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('29.10.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
 if(isset($_POST['submit1'])){
 	$file1 = fopen("file1.txt", "w") or die("Unable to open file!");
 	$first = $_POST['first'];
 	if($first >= 's1'){
 		fwrite($file1, $first);
 	} else{
 		echo "Unable enter date do file";
 	}
 	fclose($file1);

 }
?>
<?php 
  $f1 = fopen("file1.txt", "r");
  if($f1){
 		$myfile1 = fgets($f1, 999);?>
 		<div class="first">Дані з першого файлу: <?php echo $myfile1;?></div><br>
 	<?php
 }
 else echo "error";
 fclose($f1);
?>
<?php
 if(isset($_POST['submit2'])){
 	$file2 = fopen("file2.txt", "w") or die("Unable to open file!");
 	$second = $_POST['second'];
 	if($second >= 't1'){
 		fwrite($file2, $second);
 	} else{
 		echo "Unable enter date do file";
 	}
 	fclose($file2);
 }
?>
<?php 
  $f2 = fopen("file2.txt", "r");
  if($f2){
 		$myfile2 = fgets($f2, 999);?>
 		<div class="second">Дані з другого файлу: <?php echo $myfile2;?></div><br>
 	<?php 
 }
 else echo "error";
 fclose($f2);
?>
<?php
 if(isset($_POST['submit3'])){
 	$file3 = fopen("file3.txt", "w") or die("Unable to open file!");
 	$third = $_POST['third'];
 	if($third >= 'u1'){
 		fwrite($file3, $third);
 	} else{
 		echo "Unable enter date do file";
 	}
 	fclose($file3);
 }
?>
<?php 
  $f3 = fopen("file3.txt", "r");
  if($f3){
 		$myfile3 = fgets($f3, 999);?>
 		<div class="third">Дані з третього файлу: <?php echo $myfile3;?></div><br>
 	<?php 
 }
 else echo "error";
 fclose($f3);
?>
<?php
 if(isset($_POST['submit4'])){
 	$file4 = fopen("all.txt", "w") or die("Unable to open file!");
 	$all = $_POST['all'];
 	if($all >= 's1' && $all <= 'u'){
 		fwrite($file4, $all);
 	} else{
 		echo "Unable enter date do file";
 	}
 	fclose($file4);
 }
?>
<?php 
  $all = fopen("all.txt", "r");
  if($all){
 		$myfile4 = fgets($all, 999);?>
 		<div class="fourth">Дані з четвертого файлу: <?php echo $myfile4;?></div><br>
 	<?php 
 }
 else echo "error";
 fclose($all);
?>
