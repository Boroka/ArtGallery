$(document).ready(function()
{
	$("#submit").on("click", sendMessage );
});


function sendMessage(){
	
	if($("#email").val() === "")
	{
		alert("Please enter your email address!")
		return;
	}
	if($("#name").val() === "")
	{
		alert("Please enter your name!")
		return;
	}
	if($("#message").val() === "")
	{
		alert("Please add a message!")
		return;
	}

	$.ajax(
		{
		url: './php/addentry.php',
		type: 'POST',
		data: $("form").serialize(),
		success: function()
		{
			alert("Thanks for your entry!");
		},
		error: function(message)
		{
			alert("An error occured during insertion, message: " & message);
		}	
	});
}