<?php  
class RetagMessagesController extends AppController  
{  
var $name = 'RetagMessages';  
var $scaffold;  

function index()  
   {  
         $this->set('rtgmsg', $this->RetagMessage->find('all'));   
/*          makes the rtgmsg variable available in the view with the table content */
   }
}  
?>