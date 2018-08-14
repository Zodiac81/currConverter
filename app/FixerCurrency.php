<?php

namespace App;

class FixerCurrency
{
	protected $url;
	protected $endpoint = 'latest';
	protected $base;
	protected $symbols;
public $from = 'USD';
public $to = 'UAH';
public $amount = 10;
    public function __construct($url)
    {
        $this->url 	= $url;
        // $this->base = $base;
        // $this->symbols = $symbols;
    }

    public function getContent()
    {
        $ch = curl_init($this->url.$this->endpoint.'?access_key='.getenv('CUSTOMER_API_KEY'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $json_data = curl_exec($ch);
        curl_close($ch);

		$exchangeRates = json_decode($json_data, true);
		
      	 return $exchangeRates['rates'];
    }
       
}
