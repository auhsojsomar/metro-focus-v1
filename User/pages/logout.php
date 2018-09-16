 <?php
	//session_start();
	// session_destroy();
	unset($_COOKIE['role']);
	unset($_COOKIE['username']);
	unset($_COOKIE['email']);
	unset($_COOKIE['created']);
	setcookie('role',null,-1,'/');
	setcookie('username',null,-1,'/');
	setcookie('email',null,-1,'/');
	setcookie('created',null,-1,'/');
	header('Location: ../index.php');
  ?>