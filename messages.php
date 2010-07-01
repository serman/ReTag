<?php
	/* Originally from http://code.jenseng.com/jenChat/ modified to use AJAX by Shawn Van Every */
	   require_once('init.php');
		$_SESSION['reTag_NodoID'] = $_GET['id'];
		$nodo = $_SESSION['reTag_NodoID'];
	  $sql = "SELECT NodoID,CountID,State,Message,Posted
			  FROM reTag_Messages 
			  WHERE NodoID = $nodo
			  ORDER BY Posted";
	  $res = mysql_query($sql);
	?>
	<!--  If you want date and year F j, Y -->
	<!-- If you want user $row['NodoName'] . ': </strong>' .-->
	<!-- If you want date <span id="date">' .date("j F, Y", $row["LastUpdate"]) .'</span> -->
		<?
		//loop to draw all the stores or nodos in the database
		  if(mysql_num_rows($res)){
			echo '<div id="nodos"><h1> Selecciona tu Tienda</h1>';
			while($row = mysql_fetch_array($res)){
			  echo '<div> <div id="message"><a href="?id=' .
					$row['NodoID'] . '">'.
					$row['Message'] . '</a></div></div>' .
					'<object type="application/x-shockwave-flash" data="/audio/player.swf"id="audioplayer1" height="24" width="290">
	<param name="movie" value="/audio/player.swf">
	<param name="FlashVars" value="playerID=audioplayer1&soundFile=http://sandradavila.com/retag/audio/' . 
	$row['NodoID'] . '.MP3"> 
	<param name="quality" value="high">
	<param name="menu" value="false">
	<param name="wmode" value="transparent">
	</object>' ;
	// $row['Message'] . '</div>';
			}
			echo '</div>';
		  }
		?>