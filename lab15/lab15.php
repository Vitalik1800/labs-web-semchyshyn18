<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Лабораторна робота №15</title>
<style type="text/css">
    .first{
    width: 215px;
    height: 129px;
    margin: 0;
    padding: 0;
    background: #151515;
    color: #fff;
    border: #434343;
}

</style>
</head>
<body>
    <img src="img/1.png" alt=""><br>
<form method="post">
    <input type="text" name="text1" autofocus/><br><br>
    <input type="submit" name="submit">
</form>
<?php 
 echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('25.10.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
 $regex = "/[\d,. ]+/";
 if(isset($_POST['submit'])){
    if(preg_match($regex, $_POST['text1'], $matches)){
        $output1 = $matches[0];
    } else{
        $output1 = "";
    }
 }
?>
<?php 
 if(isset($output1)){
    echo "<div class='first'>Вираз = ".$output1."</div><br>";
 }
?>
</body>
</html>
