$(document).ready(function () {
	$("#logoutbar").click(function () {
		log_out();
    });
});

function log_out(){
	console.log("Hola\n");
	$.get(	'../PHP/logout.php',
			function(data, status) {
				if (status === 'success') {
					var aa = '<%= Session["SessionKey"] %>'
					console.log(aa);
				}else{
				}
			})
};