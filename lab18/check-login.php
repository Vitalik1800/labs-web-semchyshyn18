<?php 
 session_start();
 $login = $_POST['login'];
 $password1 = md5($_POST['password1']);
 $password2 = md5($_POST['password2']);
 $_SESSION['login'] = $_POST['login'];
 setcookie('password1', $password1, time() + 1800);
 setcookie('password2', $password2, time() + 1800);
 if(isset($_COOKIE['password1']) && $_COOKIE['password1'] == $password1 && isset($_COOKIE['password2'])
	&& $_COOKIE['password2'] == $password2){
 	header("Location:admin.php");
 } else{
 	echo "Перезавантажте сторінку";
 }
?>