<?php 
include_once("db.php"); // the connection to the database
include_once("Tree.php"); // Tree class

if ($_POST['tree_serialized']) {
	
	// Раскомментировать строку для увелечения времени ответа (для проверки прогресс-бара)
	// sleep(2);

	$tree = new Tree;
	
	$tree->update($_POST['tree_serialized']);
	
}
?>
