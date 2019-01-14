$( document ).ready(function() {
	
	$( "#artifactcheck" ).change(function() {
		artifactReally();
	});	
	
	

});

	function artifactReally(){
		var checkBox = document.getElementById("artifactcheck");
		var really = document.getElementById("artifactreally");
		
		if (checkBox.checked == true){
			really.style.display = "block";
		} else {
			really.style.display = "none";
		}
	}