


<?php 
//require "/var/lib/asterisk/agi-bin/phpagi-1.12/phpagi.php";	

define("APP_DATA_FILE",
    "counter.data");


$db_hostname = "mysql.sandradavila.com";
$db_Nodoname = "sandrada_tag";
$db_password = "re:tag135";
$db_database = "sandrada_re";
     
     session_start();
  $dbhandle = mysql_connect($db_hostname,$db_Nodoname,$db_password);
  mysql_select_db($db_database)or die( "Unable to select database");
  $code=900;
$query = "INSERT INTO `retag`.`reTag_Messages` ( `MessageID` ,`PhoneID` ,`Message` ,`NodoID` ,`CountID` ,`State` ,`Posted` ,`PostMessage` , `PostMedia`)
VALUES (NULL , 0, $code, '0', '0', '0', NOW( ) , '', '' );";
    
function readVar () {
	global $counter;
    // if data file exists, load application
    //   variables
    if (file_exists(APP_DATA_FILE))
    {
        // read data file
        $file = fopen(APP_DATA_FILE, "r");
        if ($file)
        {
        	echo "loading";
            $data = fread($file,
            filesize(APP_DATA_FILE));
            fclose($file);
        }

        // build application variables from
        //   data file
        $counter = unserialize($data);
    }
    else
    	echo "file not exist 1";
}

function saveVar ()
{
	    global $counter;
    // write application data to file
    $data = serialize($counter);
    $file = fopen(APP_DATA_FILE, "w");
    if ($file)
    {
    	echo "writing";
        fwrite($file, $data);
        fclose($file);
    }
    else
    	echo "file not exist 1";
}

?>
