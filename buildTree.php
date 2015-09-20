<?php

include_once("db.php");

$dir = '../dns-test'; // Директория для сканирования
$fileData = fillArrayWithFileNodes( new DirectoryIterator( $dir ) );

foreach($fileData as $k=>$d){
	insertInDB($k, $d);
}

function insertInDB($key, $data, $parent_id = 0){
	global $DBH;
	if(!is_array($data)){
      $DBH->exec("INSERT INTO tree SET label ='".$data."', parent_id=".$parent_id); 
  }else{
     	$DBH->exec("INSERT INTO tree SET label ='".$key."', parent_id=".$parent_id); 
	    $pid = $DBH->lastInsertId();
	    foreach ($data as $k => $d) {
			  insertInDB($k, $d, $pid);       	
	    }
	}
	return;
}

function fillArrayWithFileNodes( DirectoryIterator $dir )
{
  $data = array();
  foreach ( $dir as $node )
  {
    if ( $node->isDir() && !$node->isDot() )
    {
      $data[$node->getFilename()] = fillArrayWithFileNodes( new DirectoryIterator( $node->getPathname() ) );
    }
    else if ( $node->isFile() )
    {
      $data[] = $node->getFilename();
    }
  }
  return $data;
}
?>