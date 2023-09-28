<?php
# Файл настроек
$config = require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');

# Подключение к БД
require_once($_SERVER['DOCUMENT_ROOT'].'/connect.php');

# Анализируем и разбиваем адрес
$parsed_url = parse_url($_SERVER['REQUEST_URI']);
$arSection = array_values(array_filter(explode('/', $parsed_url['path'])));

# Подключаем шаблон страницы с базовой структурой
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/design.php');
