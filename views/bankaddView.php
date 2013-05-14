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
		  <select name="early_repay" id="early_repay">
          <option>Да</option>
          <option>Нет</option>
		  </select>
          </label>
        </p>
        <p align="center">
          <label>Ставка в рублях(%)<br /><br />
		  <select name="rate_in_rub" id="rate_in_rub">
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
		  </select>
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
		  <textarea name="add_costs" id="add_costs"></textarea>
          </label>
        </p>		
        <p align="center">
          <label>Документы<br /><br />
		   <textarea name="docs" id="docs"></textarea>
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
