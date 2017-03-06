<?php
define("Direct",1);

//Routing
/*$view_id = (isset($_GET["id"])&&is_numeric($_GET["id"])) ? (int)$_GET["id"] : 1 ;*/

/*
	if ( defined( 'provider' ) ) {

	 require_once("models".$provider. ".class.php?name=".);
	}

elseif($view_id === 2)
	$provider = "jawal";
elseif($view_id === 3)
	$provider = "routs";
else 
	exit('home.1 : Invaled id');*/

/*$_GET = array ();
$_POST = array ();
$_REQUEST = array ();
$_ENV = array ();
$_FILES = array ();
$_COOKIE = array ();*/
//require models
//require_once("config/config.php");

?>
<HTML>
<body>

<?php


require_once "models/isms.class.php" ;


$fact= new Isms();
$obj=$fact->fun();


$obj->sendSMS();

$obj->testSMS();

$obj->sendBULK();

?>
</body>
</HTML>
