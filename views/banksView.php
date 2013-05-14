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
	<input name="mycolor" type="checkbox" value="red" checked>Красный(выбран по умолчанию)
	<input name="mycolor" type="checkbox" value="blue">Синий
	<input name="mycolor" type="checkbox" value="black">Черный
	<input name="mycolor" type="checkbox" value="white">Белый
<table id="nalog">
	<tbody>
	<tr class="tz">
	<th>Наименование юридического лица</th>
	<th>Адрес (местонахождение) юридического лица</th>
	<th>ИНН</th>
	<th>КПП</th>
	<th>Основной государственный регистрационный номер (ОГРН)</th>
	<th>Дата присвоения ОГРН</th>
	<th>Государственный регистрационный номер записи (ГРН)</th>
	<th>Дата внесения записи</th>
	<th>Наименование регистрирующего органа, внесшего запись</th>
	<th>Адрес регистрирующего органа</th>
	<th>Регион</th>
	</tr>
	<tr class="tz">
	<th colspan="12">1.1. Сведения о государственной регистрации юридических лиц при их создании.</th>
	</tr>
	<tr class="t1">
	<td>Общество с ограниченной ответственностью "НПО Ресурс"</td>
	<td>115088,Москва г,  , Новоостаповская ул,4,2</td>
	<td align="center">7723541773</td>
	<td align="center">772301001</td>
	<td align="center">1057747241177</td>
	<td align="center">15.06.2005</td>
	<td align="center">&nbsp;</td>
	<td align="center">&nbsp;</td>
	<td>Межрайонная инспекция Федеральной налоговой службы №46 по г. Москве.</td>
	<td>125373, г.Москва, Походный пр., влд.1</td>
	<td align="center">Москва</td>
	</tr>
	</tbody>
</table>
		<div id="container">
			<?php foreach($banks as $post):?>
				<h2><?php echo $post['title'];?></h2>
			<?php endforeach;?>
		</div>
	</body>
</html>
