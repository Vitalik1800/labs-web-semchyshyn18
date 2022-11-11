<?php 
 session_start();
 if($_COOKIE['password1'] == $_COOKIE['password2']){
 	echo "Привіт ".$_SESSION['login']." Ви ввели вірний пароль";
 } else{
 	echo "Кукі очишено";
 }
?>