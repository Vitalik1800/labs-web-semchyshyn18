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

.second{
    width: 225px;
    height: 134px;
    margin: 0;
    padding: 0;
    background: #232323;
    color: #fff;
}

.third{
    width: 235px;
    height: 139px;
    margin: 0;
    padding: 0;
    background: #313131;
    color: #fff;
}

.fourth{
    width: 245px;
    height: 144px;
    margin: 0;
    padding: 0;
    background: #393939;
    color: #fff;
}

.fifth{
    width: 255px;
    height: 149px;
    margin: 0;
    padding: 0;
    background: #474747;
    color: #fff;
}

.sixth{
    width: 265px;
    height: 154px;
    margin: 0;
    padding: 0;
    background: #555555;
    color: #fff;
}

.seventh{
    width: 500px;
    height: 159px;
    margin: 0;
    padding: 0;
    background: #636363;
    color: #fff;
}
</style>
</head>
<body>
    <img src="img/1.png" alt=""><br>
<form method="post">
    <input type="text" name="text1" autofocus/><br><br>
    <input type="text" name="text2" autofocus/><br><br>
    <input type="text" name="text3" autofocus/><br><br>
    <input type="text" name="text4" autofocus/><br><br>
    <input type="text" name="text5" autofocus/><br><br>
    <input type="text" name="text6" autofocus/><br><br>
    <input type="submit" name="submit">
</form>
<?php 
echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
        echo "<br>";
        echo "<b>Дата створення документу = ".date('25.10.2022')."</b>";
        echo "<br>";
        echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
 $regex = "/(^[+-]?\d*\.\d+$)/";
 if(isset($_POST['submit'])){
    if(preg_match($regex, $_POST['text1'])){
        $output1 = $_POST['text1'];
    } else{
        $output1 = "";
    }
     if(preg_match($regex, $_POST['text2'])){
        $output2 = $_POST['text2'];
    } else{
        $output2 = "";
    }
     if(preg_match($regex, $_POST['text3'])){
        $output3 = $_POST['text3'];
    } else{
        $output3 = "";
    }if(preg_match($regex, $_POST['text4'])){
        $output4 = $_POST['text4'];
    } else{
        $output4 = "";
    }
    if(preg_match($regex, $_POST['text5'])){
        $output5 = $_POST['text5'];
    } else{
        $output5 = "";
    }if(preg_match($regex, $_POST['text6'])){
        $output6 = $_POST['text6'];
    } else{
        $output6 = "";
    }
    $all_sum = $output1." ".$output2." ".$output3." ".$output4." ".$output5." ".$output6;
 }
?>
<?php 
 if(isset($output1)){
    echo "<div class='first'>Перше число = ".$output1."</div><br>";
 }
  if(isset($output2)){
    echo "<div class='second'>Друге число = ".$output2."</div><br>";
 }
 if(isset($output3)){
    echo "<div class='third'>Третє число = ".$output3."</div><br>";
 }
 if(isset($output4)){
    echo "<div class='fourth'>Четверте число = ".$output4."</div><br>";
 }if(isset($output5)){
    echo "<div class='fifth'>П'яте число = ".$output5."</div><br>";
 }
 if(isset($output6)){
    echo "<div class='sixth'>Шосте число = ".$output6."</div><br>";
 }
 if(isset($all_sum)){
    echo "<div class='seventh'>Загальний вираз = ".$all_sum."</div><br>";
 }
?>
</body>
</html>
