<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <title>Lab 4</title>

  <link rel="stylesheet" href="index.css">
</head>

<body>
<?php
if (isset($_COOKIE['name']) && !empty($_COOKIE["name"]))
{
	echo'
	<div class= "name">	
		<h1>Текущее имя пользователя '; echo $_COOKIE["name"];
	echo '<h1>
	</div>';
}
?>
	<div class="form-block">
		<form action="saveNameToCookie.php" method="POST">
			<label>Введите имя пользователя</label>
			<input type="text" placeholder="Имя" name="name">
			<input type="submit" value="Сохранить">
		</form>
	</div>
	
	<div class="form-block">
		<form>
			<label>Очистить куки</label>
			<input type="submit" formaction="clearCookie.php" value="Очистить">
		</form>
	</div>
	
<style>
	body{
		background-image:url('background.jpg');
		background-position:center center;
		background-repeat: none;
	}
	div.name{
		display:flex;
		margin:100px auto;
		justify-content:center;
	}
	.form-block{
		display:flex;
		font-size:22px;
		width:75%;
		margin:75px auto;
		justify-content:center;
	}
	
	.form-block label{
		margin: auto 25px;
	}
	input{
		border-radius:5px;
		border: 1px solid black;
	}
	
	input[type="text"]{
		text-align:center;
		width: 200px;
	}
	
	input[type="submit"]{
		width: 150px;
		font-size:14px;
	}
	
	.form-block input{
		text-align: center;
		padding: 5px;
		margin: 10px;
	}
</style>
</body>

</html>
