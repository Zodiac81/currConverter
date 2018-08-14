<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/env.php';

use App\FixerCurrency;
//echo  getenv('CUSTOMER_API_KEY');
$a = new FixerCurrency('http://data.fixer.io/api/');
// print_r($a->getContent()) ;
 $rates =$a->getContent();

foreach ($rates as $rate){
	echo round($rate, 2)."<br>";
}
 