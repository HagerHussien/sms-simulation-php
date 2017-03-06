<?php

if ( ! defined( 'Direct' ) ) {
	exit('factory.int.1 : No direct access');
} 

interface factory
{
    public function testSMS();
    public function sendSMS( );
    public function sendBULK( );
  
}