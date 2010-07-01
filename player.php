<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head> 
  <script language="JavaScript" src="audio/audio-player-uncompressed.js"></script>
    <title>Create New Message</title>
  </head>
  <body>
<?php 
  //include the list of nodes from the database. 
  include($_SERVER['DOCUMENT_ROOT'].'/retag/messages.php');  
  ?> 
  </body>
</html>


