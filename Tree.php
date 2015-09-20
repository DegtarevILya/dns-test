<?php

class Tree 
{
 	private $tree_array = array();

	function __construct(){
    	
    	global $DBH;    
        
        $STH = $DBH->prepare("SELECT * FROM tree ORDER BY parent_id, orderBy"); 
		$STH->execute();

		$arr = $STH->fetchAll(PDO::FETCH_ASSOC);  

		if (count($arr) != 0)
		{
		    foreach ($arr as $row)
		    {
				$this->tree_array[$row['id']] = array("parent_id" => $row['parent_id'], "label" => $row['label']);	
		    }
		}
		
	} 

	public function printTree($array = NULL, $currentParent=0, $currLevel = 0, $prevLevel = -1) {
		
		if(empty($array)){
			$array = $this->tree_array;
		}

		foreach ($array as $Id => $category) {
			
			if ($currentParent == $category['parent_id']) {						
				
				if ($currLevel > $prevLevel) echo " <ul ".($currLevel ? 'style="display: none;"' : '')."> \n"; 
				
				if ($currLevel == $prevLevel) echo " </li> \n";
				
				echo '<li id="'.$Id.'"><span>'.$category['label'].'</span>';
							
				if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }
				
				$currLevel++; 

			 	$this->printTree($array, $Id, $currLevel, $prevLevel);
			 	
			 	$currLevel--;	 		 	

			}	

		}
		
		if ($currLevel == $prevLevel) echo "\n </li> \n </ul> \n";

	}

	public function update($serialized) {
		
		global $DBH;
		
		$categories = explode("|", substr($serialized,0,-1));

		foreach ($categories as $category) {
	 		list($parentId, $Id, $order) = explode(":", $category);
	 		
	 		if ( (int)$parentId == $parentId && (int)$order == $order && (int)$Id == $Id )
	 			
	 			 $DBH->exec("UPDATE tree SET parent_id = ".$parentId.", orderBy = ".$order." 
	 						    WHERE id = ".$Id);
	 	}

	 	return;
	}

 
} 