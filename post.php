<?php
/* Originally from http://code.jenseng.com/jenChat/ modified to use AJAX by Shawn Van Every */
  require_once('init.php');
  
    // echo "reTag_NodoID: " . $_SESSION['reTag_NodoID'];
//   if(!isset($_SESSION['notjabber_UserID']))
//     exit;
//   
  /* make sure something was actually posted. */
 // if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     /* post the message. */
$chingado = $_SESSION['reTag_NodoID'];
$chingado2 = date("YmdHis", time());
$chingado3 = $_GET['message'];
    mysql_query("INSERT INTO reTag_Messages(NodoID,Posted,Message)
                 VALUES(
                  '$chingado','$chingado2','$chingado3')");
   // exit;
  // }
   echo "\n".$_GET['message'];
?>
