<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Komunalka3</title>
</head>
<body>
<h2>Версия 3</h2>

<?php
# Роутер

// Главная страница
if (empty($arSection)) {
	include($_SERVER['DOCUMENT_ROOT'].'/templates/section/list.php');
}
// Все остальные разделы
elseif (count($arSection) == 1) {
	include($_SERVER['DOCUMENT_ROOT'].'/templates/section/'.$arSection[0].'.php');
}
// Исключение для неправильных адресов
else {
	include($_SERVER['DOCUMENT_ROOT'].'/templates/section/404.php');
}
?>

</body>
</html>