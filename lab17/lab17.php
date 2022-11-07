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
    <select name="S">
        <option value="s1">s1</option>
        <option value="s1,s2">s1, s2</option>
         <option value="s1,s2,s3">s1, s2, s3</option>
         <option value="s1,s2,s3,s4">s1, s2, s3, s4</option>
          <option value="s1,s2,s3,s4, s5">s1, s2, s3, s4, s5</option>
    </select><br><br>

    <select name="T">
        <option value="t1">t1</option>
        <option value="t1,t2">t1, t2</option>
         <option value="t1,t2,t3">t1, t2, t3</option>
         <option value="t1,t2,t3,t4">t1, t2, t3, t4</option>
          <option value="t1,t2,t3,t4, t5">t1, t2, t3, t4, t5</option>
    </select>

    <select name="U">
        <option value="u1">u1</option>
        <option value="u1,u2">u1, u2</option>
         <option value="u1,u2,u3">u1, u2, u3</option>
         <option value="u1,u2,u3,u4">u1, u2, u3, u4</option>
          <option value="u1,u2,u3,u4, u5">u1, u2, u3, u4, u5</option>
    </select>

    <input type="submit" name="submit1" vlaue="Choose options">
</form>

<?php
echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('04.10.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
 	global $first,$second,$third;
    if(isset($_POST['submit1'])){
    	if(!empty($_POST['S'])) {
    		$selected = $_POST['S'];
        	echo 'You have chosen: ' . $selected."<br>";
        	$file1 = fopen("file1.txt", "w") or die("Unable to open file!");
 			$first = $_POST['S'];
 			fwrite($file1, $selected);
 			fclose($file1);

    } else {
        echo 'Please select the value.';
    }
    if(!empty($_POST['T'])) {
    		$selected = $_POST['T'];
        	echo 'You have chosen: ' . $selected."<br>";
        	$file2 = fopen("file2.txt", "w") or die("Unable to open file!");
 			$second = $_POST['T'];
 			fwrite($file2, $selected);
 			fclose($file2);

    } else {
        echo 'Please select the value.';
    }
    if(!empty($_POST['U'])) {
    		$selected = $_POST['U'];
        	echo 'You have chosen: ' . $selected."<br>";
        	$file3 = fopen("file3.txt", "w") or die("Unable to open file!");
 			$third = $_POST['U'];
 			fwrite($file3, $selected);
 			fclose($file3);

    } else {
        echo 'Please select the value.';
    }
    }
?>

<form action="" method="post">
	<textarea  name="all" id="" placeholder="Введіть дані для з першої, другої, третьої форми" cols="30" rows="5">
<?php echo $first." ".$second." ".$third;?>
	</textarea><br><br>
	<input type="submit" name="submit4" value="Створити загальний файл">
</form>


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
 	fwrite($file4, $all);
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
