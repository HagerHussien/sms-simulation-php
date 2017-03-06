<?php
/**
*
*/
if ( ! defined( 'Direct' ) ) {
	exit('jawal.1 : No direct access');
}


class Jawal implements factory
{
	
	function __construct()
	{
		echo "jawal init";
	}


	 function testSMS( ){

	 	echo "jawal testsms";

	 }
    
    function sendSMS( ){

	echo "jawal sendsms";
    }
    
     function sendBULK( ){
     		echo "jawal sendbulk";
     	
     }
}
