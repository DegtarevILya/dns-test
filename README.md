Тестовое задание. 

"Нужно реализовать:

		1.	Сделать дерево как в примере (без кнопок Collapse All, Expand All), так же обратить внимание, что есть папки, а есть документы в папках.

		2.	Реализовать «перетаскивание» как папок целиком (с дочерними папками), так и документов по отдельности
	
		3.	При перетаскивании результат должен сохраняться в БД. Архитектура БД может быть любой.

		4.	При сохранении в БД, на клиентской части должен отображаться прогресс бар (как в примере).

Требования:

		1.	Сохранение должно работать через AJAX

		2.	Обработка клиентских событий должна быть реализована только на JavaScript с использованием jquery (с любыми расширениями и плагинами).

		3.	Серверная часть на PHP 5.5 

		4.	Базу данных использовать MySQL 

		5.	В проект должна быть включена локальная база данных, таблицы должны быть заполнены данными"

Задание выполнено соглаcно требованиям. 

Файлы:

		db.php содержит настройки подключения к БД.

		index.php - скрипт отображения/редактирования дерева

		data.sql - дамп базы. 

		Tree.php - содержит 2 функции работы с деревом (printTree - вывод дерева, update - обновление дерева)

		ajaxSave.php - обработчик ajax запроса сохранения дерева в БД.

		js/app.js - javascript код

		buildTree.php - вспомогательный скрипт (добавляет в БД рекурсивный листинг файлов заданной директории) 



