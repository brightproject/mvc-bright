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
	<!--<input name="mycolor" type="checkbox" value="red" checked>Красный(выбран по умолчанию)
	<input name="mycolor" type="checkbox" value="blue">Синий
	<input name="mycolor" type="checkbox" value="black">Черный
	<input name="mycolor" type="checkbox" value="white">Белый-->
<table id="nalog">
	<tbody>
	<tr class="tz">
	<th>Имя банка</th>
	<th>Досрочное погашение</th>
	<th>Ставка в рублях</th>
	<th>Первоначалка</th>
	<th>Срок кредита</th>
	<th>Срок рассмотрения</th>
	<th>Доп расходы</th>
	<th>Документы</th>
	</tr>
	<!--<tr class="tz">
	<th colspan="12">1.1. Сведения о государственной регистрации юридических лиц при их создании.</th>
	</tr>-->
	<?php foreach($banks as $post) {?>
	<tr class="t1">
	<td align="center"><?php echo $post['bank'];?></td>
	<td align="center"><?php echo $post['early_repay'];?></td>
	<td align="center"><?php echo $post['rate_in_rub'];?> %</td>
	<td align="center"><?php echo $post['first_pay'];?> %</td>
	<td align="center"><?php echo $post['credit_period'];?> лет</td>
	<td align="center"><?php echo $post['period_of_review'];?> недель</td>
	<td align="center"><?php echo $post['add_costs'];?></td>
	<td align="center"><?php echo $post['docs'];?></td>
	</tr>
	<?php }?>
	</tbody>
</table>

	</body>
</html>
