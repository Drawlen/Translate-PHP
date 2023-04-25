<?php
	$connect = mysqli_connect('localhost', 'root', '', 'pjtranslate');
	if(!$connect) {
		die('Ошибка подключения к БД');
	}