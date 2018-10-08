<?php
chdir('/var/www/html/');
include('src/config.php');
include('src/functions.php');
include('src/routeClass.php');

// Header
include('parts/header.php');

// Pages routing
if(isset($_GET['page']))	{
	switch ($_GET['page']) {
		case 'routerA':
			include('pages/routerA.php');
			break;
		case 'routerB':
			include('pages/routerB.php');
			break;
		case 'testSudo':
			include('pages/testSudo.php');
			break;
		default:
			// Home
			include('pages/home.php');
			break;
	}
}
else {
	include('pages/home.php');
}

// Footer
include('parts/footer.php');
 ?>
