<?php
/**
*
*/
if ( ! defined( 'Direct' ) ) {
	exit('etisalat.1 : No direct access');
}


class Etisalat implements factory
{
	
	function __construct()
	{
		echo "etisalat init";
	}

	
	 function testSMS( ){

	 	echo "etisalat testsms";

	 }
    
    function sendSMS( ){

	echo "etisalat sendsms";
    }
    
     function sendBULK( ){
     		echo "etisalat sendbulk";
     	
     }
}