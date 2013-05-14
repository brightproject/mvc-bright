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
          <label>Имя банка<br /><br />
            <input value="" type="text" name="bank" id="bank">
            </label>
          </p>
        <p align="center">
          <label>Досрочное погашение<br /><br />
          <input value="" type="text" name="early_repay" id="early_repay">
          </label>
        </p>
        <p align="center">
          <label>Ставка в рублях<br /><br />
          <input value="" type="text" name="email" id="email">
          </label>
        </p>
        <p align="center">
          <label>Первоначальный платеж<br /><br />
          <input value="" type="text" name="first_pay" id="first_pay">
          </label>
        </p>
        <p align="center">
          <label>Срок кредита<br /><br />
          <input value="" type="text" name="credit_period" id="credit_period">
          </label>
        </p>
        <p align="center">
          <label>Срок рассмотрения<br /><br />
          <input value="" type="text" name="period_of_review" id="period_of_review">
          </label>
        </p>
        <p align="center">
          <label>Дополнительные расходы<br /><br />
          <input value="" type="text" name="add_costs" id="add_costs">
          </label>
        </p>		
        <p align="center">
          <label>Документы<br /><br />
          <input value="" type="text" name="docs" id="docs">
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
