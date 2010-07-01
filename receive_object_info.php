<?php
	   require_once('init.php');

// Where the file is going to be placed 

//Process uploaded files

$target_path = "uploads/";

if(!isset($_POST['msgID']))
die("not message identifier for this function");

echo $_POST['msgID'] . "  eee ";

if(isset($_FILES['uploadedfile'])){
	
	  $allowedExtensions = array("txt","csv","htm","html","xml",
	    "css","doc","xls","rtf","ppt","pdf","swf","flv","avi",
	    "wmv","mov","jpg","jpeg","gif","png");
	  foreach ($_FILES as $file) {
	    if ($file['tmp_name'] > '') {
	      if (!in_array(end(explode(".",
	            strtolower($file['name']))),
	            $allowedExtensions)) {
	       die($file['name'].' is an invalid file type!<br/>'.
	        '<a href="javascript:history.go(-1);">'.
	        '&lt;&lt Go Back</a>');
	      }
	    }
	  } 
	
	/* Add the original filename to our target path.  
	Result is "uploads/filename.extension" */
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
	
	
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
	    " has been uploaded";
	} else{
	    echo "There was an error uploading the file, please try again!";
	}
	
}	
//TODO update DB

//process uploaded text
//UPDATE reTag_Messages SET PostMessage="tiriri msg" where MessageID = 1
if(isset ($_POST['comments'])) {
	$query=' UPDATE reTag_Messages SET PostMessage="' .
	$_POST['comments'].
	'" '  .
	'where MessageID =' .
	$_POST['msgID'];   
	echo $query;
	

}



?>