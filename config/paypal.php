<?php
return array(
	//Credeciales de PayPal
	//'client_id'	=> 'Ac8rITKm7flbjh4PAMp1DZ6Ncm-fAk9PPXYSUFnlCL_0GkM_KLc7NGF1DJ6wTm1pIQWOZq9WDDp2lObE',
    'client_id' => 'AeWvffe3f0HH_We6YZFfe0XdnAIqiQhEu3vQcoonEGKHhOHLvdp8qT2xarNzPrFAMS6MGLSwCEC68pxT',
	//'secret'	=> 'EEaC5_-SnK1A0h_4q3YA1fqLYjq8E1cO7l2MY8m4evELExnJKYa456OdBxHlf5OHhmBfD4VdwlzpLYd9',
    'secret'    => 'EAHOLyJkj3PdylQHDB0tL1Um7IMH-4yp-YvawgdHGH0SGX9KskyfGW2me8Iadlk_V6v7eC9qZ3ad14TB',
	/**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
 
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
 
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
 
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
 
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);