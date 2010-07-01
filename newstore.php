<?php
//use this for adding new "stores" or nodos to the database
require_once('init.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//   ONly accept numbers and letters  after submiting go to 
     if(preg_match('/^[_a-z0-9-]+$/i',$_POST['who'])){
          mysql_query("INSERT INTO reTag_Nodos(NodoName,LastUpdate) VALUES ('".mysql_real_escape_string($_POST['who'])."'," . date("YmdHis",time()).")");
        header("Location: ./newmessage.php");
          exit;
        }   
      else
        $error = "Nodonames may only contain letters, numbers, hyphens and dashes.";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head>
    <title>Add a new user or store</title>
  </head>
  <body>
    <h1>New Store</h1>
    <form class="grid" method="post" action="./newstore.php">
      Store<br>
      <label for="who">Name: </label><input type="text" id="who" name="who" value="<? echo htmlspecialchars($_POST['who']) ?>" />
      <input type="submit" value="Submit" class="submit" />
    </form>
    <p class="error">
      <? echo htmlspecialchars($error); ?>
    </p>
  </body>
</html>