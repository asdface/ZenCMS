// JavaScript Document
// Written and coded by Gilles De Mey
// Copyrighted by the GNU GENERAL PUBLIC LICENSE (c)
 
         $("#status").html("<img src='images/ajax-loader.gif' alt='loading' style='margin-left:105px; margin-top:20px; margin-bottom:20px;' />");
		$.get(
			("includes/status.php"),
			{language: "php", version: 5},
			function(responseText){
				$("#status").html(responseText);
			},
			"html"
		); 