<h1>Messages</h1>  
<table>  
   <tr>  
       <th>Message Code</th>  
       <th>MessageNumber</th>  
   </tr>  
   <?php foreach ($rtgmsg as $msg): ?>  
   <tr>  
       <td><?php echo $msg['RetagMessage']['Message']; ?></td>  
 
       <td><?php echo $msg['RetagMessage']['PhoneID']; ?></td>  
 </tr>  
   <?php endforeach; ?>  
</table>