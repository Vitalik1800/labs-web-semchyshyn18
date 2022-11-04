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
    <textarea type="text" name="string" placeholder="String1"></textarea><br><br>
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
    $string1 = $_POST['string'];
    $string1[2] = $_POST['number'];
    $words1 = preg_split($regex, $string1);
    $new_arr = array_filter($words1, function ($val) use ($string1) {
        return (strpos($string1, $val) !== false);
    });
    if ($new_arr) {
        usort($new_arr, function ($a, $b) {
        return str_word_count($b) - str_word_count($a);
    });
    ?>
    <div class='first'>Рядок: <?php echo var_dump($new_arr);?></div><br>
    <?php 
    echo "<div class='second'>Найбільше слів в рядку: $new_arr[0]</div><br>";
    ?>
    <?php } else{

        ?>
    <?php }
 }

?>
