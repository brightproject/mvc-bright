<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/lib/css/style.css"/>
		<title><?php echo $title;?></title>
	</head>
	<body>
	<div id="menu">
	<a href="/banks">Список банков</a></br >
	<a href="/banks/add">Добавить банк</a></br >
	<a href="/banks/update">Обновить банк</a></br >
	<a href="/banks/delete">Удалить банк</a></br >
	</div>

<form name="form" method="post" action="">
        <p align="center">
          <label>Логин<br /><br />
            <input value="" type="text" name="login" id="login">
            </label>
          </p>
        <p align="center">
          <label>Пароль<br /><br />
          <input value="" type="text" name="pass" id="pass">
          </label>
        </p>
        <p align="center">
          <label>Электронка<br /><br />
          <input value="" type="text" name="email" id="email">
          </label>
        </p>
        <p align="center">
          <label>
          <input type="submit" name="submit" id="submit" value="Добавить">
          </label>
        </p>
</form> 

	</body>
</html>
	<?php 	
	// $pattern = 'INSERT INTO `users` SET `login`=?, `pass`=?, `email`=?';
	// $data    = array($login, $pass, $email);
	// $userId  = $db->query($pattern, $data, 'id');						
	// echo 'Мы создали пользователя, его ID='.$userId;
	?>
