<style type="text/css">
     .first{
    width: 650px;
    height: 129px;
    margin: 0;
    padding: 0;
    background: #434343;
    color: #fff;
    border: #434343;
}

.second{
    width: 650px;
    height: 134px;
    margin: 0;
    padding: 0;
    background: #505050;
    color: #fff;
}

.third{
    width: 650px;
    height: 139px;
    margin: 0;
    padding: 0;
    background: #575757;
    color: #fff;
}
</style>
<img src="1.png" alt="">
<form action="" method="post">
    <textarea type="text" name="string" placeholder="String"></textarea><br><br>
    <input type="submit" name="submit" value="Click">
</form>
<?php
echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
        echo "<br>";
        echo "<b>Дата створення документу = ".date('29.10.2022')."</b>";
        echo "<br>";
        echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
 if(isset($_POST['submit'])){
   $str = $_POST['string'];
   echo "<div class='first'>".nl2br("Початковий рядок: $str \n")."</div>.<br>";
   $encoded = base64_encode($str);
    echo "<div class='second'>".nl2br("Рядок після кодування: $encoded\n")."</div>.<br>";
   $decoded = base64_decode($encoded);
   echo "<div class='third'>Рядок після декодування: $decoded"."</div>";
 }

?>