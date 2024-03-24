
<form method="post">

<button type="submit" name="logout">logout</button>

</form>

<?php

session_start();


if(!isset($_SESSION['email'])){
	
	header("Location: login.php");
	exit();
}





echo 'welcome ' . $_SESSION['email'];

if(isset($_POST['logout'])){
	unset($_SESSION['email']);
	header("Location: login_medicin.php");
	exit();
}


?>