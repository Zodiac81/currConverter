<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/env.php';

use App\FixerCurrency;
use App\CurrentCurrency;

$getCountriesList = new CurrentCurrency(getenv('CURRENCY_SYMBOLS_ENDPOINT'));
$countries = $getCountriesList->countries_list;
//print_r($currency->getCurrentCurrency("USD", "EUR", 100));
 

require 'converter_form.php';

