<?php
$db_hostname = "mysql.blogs.eclectico.net";
$db_Nodoname = "retag";
$db_password = "retag1";
$db_database = "retag";

$global_path='';
function install_tables(){
print "installing tables";
//   Uncomment for creating mysql tables and place after mysql_select_db. 
//   Table for the n ame of the Stores or Spaces. 
   $query="CREATE TABLE reTag_Nodos (
   NodoID int(10) unsigned NOT NULL auto_increment,
   NodoName varchar(20) NOT NULL default '',
   LastUpdate timestamp(14) NOT NULL,
   PRIMARY KEY  (NodoID)
   )";
//   
//   //Table for storing the messages. 
   $query2="CREATE TABLE reTag_Messages (
   MessageID int(10) unsigned NOT NULL auto_increment,
   PhoneID int(10) NOT NULL,
   Message int(255) NOT NULL default '',
   NodoID int(10) NOT NULL default '0',
   CountID int(10) NOT NULL default '0',
   State int(10) NOT NULL default '0',
   Posted timestamp(14) NOT NULL,
   PostMessage varchar(255) NOT NULL default '',
   PostMedia  varchar(255) NOT NULL default '',
   PRIMARY KEY  (MessageID) 
   )"; 

	if( mysql_query($query) and mysql_query($query2) ){
		print " Created two tables";
	}
	else{
		print " error creating tables ";
	}
		
	
} 
  session_start();
  $dbhandle = mysql_connect($db_hostname,$db_Nodoname,$db_password);
  mysql_select_db($db_database)or die( "Unable to select database");
  //   Uncomment for creating mysql tables and place after mysql_select_db. 
//   Table for the n ame of the Stores or Spaces. 
  //install_tables();
  ?>