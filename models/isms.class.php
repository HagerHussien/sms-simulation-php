<?php
/**
*
*/


require_once("config/config.php");

require_once("models/factory.interface.php");

require_once("models/etisalat.class.php");

require_once("models/jawal.class.php");

require_once("models/routs.class.php");

class Isms 
{	
	function fun(){

if(provider === "etisalat" )
	{

$obj=new Etisalat();
	return $obj;

	}
elseif(provider === "jawal")
	{

$obj=new Jawal();
return $obj;

}

elseif(provider=== "routs")
{

$obj=new Routs();
return $obj;

}



	}
	
	
}