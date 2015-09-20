<?php

$mysql_conf = array(
  'host' => '127.0.0.1',
  'user' => 'root',
  'pass' => '',
  'db' => 'test_hot',
);

# Соединение с базой данных
try 
{          
  	$DBH = new PDO('mysql:host='.$mysql_conf['host'].'; dbname='.$mysql_conf['db'], $mysql_conf['user'], $mysql_conf['pass']);  
	$DBH->exec('SET NAMES "utf8"'); 
	$DBH->exec('SET CHARACTER SET "utf8"'); 
	$DBH->exec('SET SESSION collation_connection = "utf8_general_ci"'); 
}  
catch(PDOException $e) 
{  
  echo $e; 
}


