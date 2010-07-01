<?php
/* Originally from http://code.jenseng.com/jenChat/ modified to use AJAX by Shawn Van Every */
   require_once('init.php');
   $nodo_name=$_GET["node"];
   $object_id=$_GET["id"];
  
   //select all nodes from node=nodeid && 
  
  //http://sergio.eclectico.net/retag/object.php?id=1000&node=medialab 
  
  $sql = "SELECT MessageID, PhoneID, Message, NodoID, CountID, State, Posted, PostMessage, PostMedia FROM reTag_Messages
          where Message= $object_id and NodoID = (Select NodoID from reTag_Nodos Where NodoName= '$nodo_name')";
  $res = mysql_query($sql);

  $row = mysql_fetch_array($res);
//echo $nodo_name, " aa ", $object_id ;
    //loop to draw all the stories or nodos in the database
        echo '<div id="o"><h1> Objeto</h1>';
		echo 'Codigo' . $row['Message'];
		echo '<br/ > Nodo' . $nodo_name;
		echo '<br/ > Nodo' . $row['MessageID'];
      if(mysql_num_rows($res)){
        echo 'Pulsa para escuchar la historia del objeto' ;
        
/* incluir flash          */
        if($row['PostMessage'] == ''){ 
        
        ?>
        
			<form method="post" action="receive_object_info.php">
			<input type="hidden" name="msgID" value="<?= $row['MessageID'];?>" />

			<textarea name="comments" cols="40" rows="5">
			Si ahora eres el propietario del objeto y quieres informar al anterior propietario sobre donde esta el objeto ahora, escribe texto aqui.
			</textarea>
			
			<br>
			<input type="submit" value="text" />
			</form>
	
	        <?php
        }
        else{ // if there is a new message
/*We can print the story   */
          print "<div id='new_owner_story'>" ;
          print $row['PostMessage'];    
          print " </div> " ;
         
         
         
        }
        if( $row['PostMedia']!='' ) {
        	echo '<img src="imagenes/' .
        	$row['PostMedia'] .
        	'">';
        }
        else{ // no images for now
/*       show Upload form   */
		?>  
		
		<form enctype="multipart/form-data" action="uploader.php" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
			Choose a file to upload: <input name="uploadedfile" type="file" /><br />
			<input type="submit" value="Upload File" />
			<input type="hidden" name="msgID" value="<?= $row['MessageID'];?>" />

			</form>
			

        
        <?php } // end else upload file form
        } //end form parsing
        
        
        

 ?>