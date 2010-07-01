<?php
//Use this for writing audio files to the database. It fills the "message" field
  // connect to Database
  require_once('init.php'); 
  session_start();   
  // This will setup the store or nodo based on selection. 
  $_SESSION['reTag_NodoID'] = $_GET['id']; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head> 
    <title>Create New Message</title>
  </head>
  <body>
  		<script type="text/javascript">
			// Form Sending
			function submit_form()
			{
				// Manually getting the form values and sending them off
				var message = document.forms['theform'].message.value;
				message = encodeURI(message);
				document.forms['theform'].message.value = "";
			}
		</script>
  <?php 
  //include the list of nodes from the database. 
  include($_SERVER['DOCUMENT_ROOT'].'/retag/nodos.php');  
  ?> 
    <h1>Archivos de Audio</h1>
		<form method="GET" action="post.php?message=" id="theform">
			<input type="text" name="message" />
			<input value="Submit" type="button" />
		</form>   
  </body>
</html>
