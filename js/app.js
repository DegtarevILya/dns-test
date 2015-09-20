var tree;	

$(document).ready(function(){
	
	tree = $('.tree').simpleTree({
		afterMove:function(node){	
			$('.trigger:first',node).addClass('ajax');
			var serialStr = "";
			var order = "";
			$("ul.tree li span").each(function(){			
				parentId = $(this).parent("li").parent("ul").parent("li").attr("id");
				if (parentId == undefined) parentId = "root";
				order = (($(this).parent("li").prevAll("li").size()+1))/2; 
				if ( parentId != "root") serialStr += ""+parentId+":"+$(this).parent("li").attr("id")+":"+order+"|";
			});
			$.ajax({
			   type: "POST",
			   url: "ajaxSave.php",
			   data: {tree_serialized: serialStr}
			 });
	
			return false;
		},
		
	});	
	
});

$( document ).ajaxStop(function() {
  	$( ".ajax" ).removeClass('ajax');
});