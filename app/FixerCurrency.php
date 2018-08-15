<?php

namespace App;

class FixerCurrency
{
	protected $url;
	//protected $endpoint = 'latest';

    public function __construct($url)
    {
        $this->url 	= $url;
    }

    public function getContent()
    {
        $ch = curl_init($this->url.'?access_key='.getenv('CUSTOMER_API_KEY'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $json_data = curl_exec($ch);
        curl_close($ch);

		$exchangeRates = json_decode($json_data, true);
		
      	return $exchangeRates;
    }
       
}
