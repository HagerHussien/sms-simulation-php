<?php
/**
*
*/
if ( ! defined( 'Direct' ) ) {
	exit('routs.1 : No direct access');
}


class Routs implements factory
{
	
	function __construct()
	{
		echo "routs init";
	}


	 function testSMS( ){

	 	echo "routs testsms";

	 }
    
    function sendSMS( ){

	echo "routs  sendsms";
    }
    
     function sendBULK( ){
     		
     		echo "routs  sendbulk";
     	
     }
}