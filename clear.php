<?php
  // Clear all the tables of the database, use only when testing. 
  require_once('init.php');
  mysql_query(" TRUNCATE TABLE `reTag_Messages`  ");
  mysql_query(" TRUNCATE TABLE `reTag_Nodos`  ");
  echo 'adios mundo';
?>
