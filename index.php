<!DOCTYPE HTML>
<html>
	<head>
		<title>Тестовое задание</title>
		<link rel="stylesheet" media="screen" type="text/css" href="css/style.css" />
		
	</head>
<body>
	
	<?php include_once("db.php"); ?>
	<?php include_once("Tree.php"); ?>
	<h1>Тестовое задание</h1>
	<ul class="tree">
		<li id="0" class="root">
			<?php 
				$tree = new Tree;
				$tree->printTree();
			?>
		</li>
	</ul>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.simple.tree.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	
</body>

</html>
