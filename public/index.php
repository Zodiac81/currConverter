<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/env.php';

use App\FixerCurrency;
use App\CurrentCurrency;

$currency = new CurrentCurrency();
$countries= $currency->getCountries();
$a = $currency->getCurrentCurrency(100,"USD", "EUR");
echo $a;
require 'converter_form.php';

