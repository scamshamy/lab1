<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<title>Расчет покупки</title>
</head>
<body>
	<form action="pr.php" method="GET">
		<select name="Tovar">
			<option value="1">Блок питания</option>
			<option value="2">Карта памяти</option>
			<option value="3">Манипулятор "мышь"</option>
		</select><br /><br />
		Наличие дисконтной карты: <input type="checkbox" name="DK" /><br /><br />
		<input type ="text" name="K" />
		<input type="submit" value="Pассчитать" />
			<br> Только 1, 2 , 3 </br>
	</form>
</body>
</html>