<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лабораторна робота 18</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style>
		.container{
			background: green;
	height: 350px;
	text-align: center;
	color: #fff;
	padding-top: 20 !important;
}
.form-signin{
	margin-top: 10px;
}

h2{
	padding-top: 10px;
}

	</style>
</head>
<body>

	<img src="1.png" alt="">
	<?php 
	 echo "<br><b>Група СТс-41, Семчишин Віталій Ігорович</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('04.10.2022')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2022')."</b></br><br>";
	?>
	 <div class="container">
        <form action="check-login.php" class="form-signin" method="post">
            <h2>Авторизація</h2><br>
            <input type="text" name="login" class="form-control" placeholder="Ім'я користувача" required=""><br>
            <input type="password" name="password1" class="form-control" placeholder="Пароль" required=""><br>
            <input type="password" name="password2" class="form-control" placeholder="Повторіть пароль" required=""><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Авторизація</button>
        </form>
    </div>
</body>
</html>