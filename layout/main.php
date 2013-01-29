<?php 
//display message of there is one in session data
if(isset($_SESSION['message'])){
	//display message
	echo "<div class=\"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
	//remove message from session
	unset($_SESSION['message']);
}
//Store the 'p' parameter from the QS into a variable
if(isset($_GET['p'])) {
$p = $_GET['p'];
} else {
	$p = 'home';
}

include("views/$p.php");