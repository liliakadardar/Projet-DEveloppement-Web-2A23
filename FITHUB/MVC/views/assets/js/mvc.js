$(function()
{
	$("#payer-btn").click(function(e)
	{
		e.preventDefault();

		var firstName = $("#firstName").val();
		$.ajax({
	    	url: 'assets/php/payer.php',
	    	type: 'POST',
	    	dataType: 'text',
	    	data: {firstName: firstName},
	    })
	    .done(function(response) {
	    	console.log("success");
	    	
	    })
	    .fail(function() {
	    	console.log("error");
	    });
	});
});