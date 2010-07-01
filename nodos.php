<?php
/* Originally from http://code.jenseng.com/jenChat/ modified to use AJAX by Shawn Van Every */
   require_once('init.php');
  $sql = "SELECT NodoName,LastUpdate,NodoID
          FROM reTag_Nodos 
          ORDER BY LastUpdate";
  $res = mysql_query($sql);
?>
<!--  If you want date and year F j, Y -->
<!-- If you want user $row['NodoName'] . ': </strong>' .-->
<!-- If you want date <span id="date">' .date("j F, Y", $row["LastUpdate"]) .'</span>
 -->
    <?
    //loop to draw all the stores or nodos in the database
      if(mysql_num_rows($res)){
        echo '<div id="nodos"><h1> Selecciona tu Tienda</h1>';
        while($row = mysql_fetch_array($res)){
          echo '<div> <div id="message"><a href="?id=' .
                $row['NodoID'] . '">'.
                $row['NodoName'] . '</a></div></div>';
               // $row['Message'] . '</div>';
        }
        echo '</div>';
      }
    ?>