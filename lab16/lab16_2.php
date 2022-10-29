<style type="text/css">
     .first{
    width: 600px;
    height: 129px;
    margin: 0;
    padding: 0;
    background: #151515;
    color: #fff;
    border: #434343;
}

.second{
    width: 600px;
    height: 134px;
    margin: 0;
    padding: 0;
    background: #232323;
    color: #fff;
}
</style>
<img src="2.png" alt="">
<form action="" method="post">
    <textarea type="text" name="string1" placeholder="String1"></textarea><br><br>
    <textarea type="text" name="string2" placeholder="String2"></textarea><br><br>
    <input type="text" name="number">
    <input type="submit" name="submit" value="Click">
</form>
<?php
 echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('29.10.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
 if(isset($_POST['submit'])){
    $regex = "/[$_POST[number]]+/";
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    $words1 = preg_split($regex, $string1);
    $words2 = preg_split($regex, $string2);
    if($string1[2] == $_POST['number'] && $string2 != $_POST['number']){
        ?>
       <div class='first'><?php echo var_dump($words1);?></div><br>
    <?php } else{

        ?>
        <div class='second'><?php echo var_dump($words2);?></div><br>
    <?php }
 }

?>