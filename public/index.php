<?php

require __DIR__.'/../vendor/autoload.php';

use App\CurrentRate;

$getCountriesList = new CurrentRate(getenv('CURRENCY_SYMBOLS_ENDPOINT'));
$countries = $getCountriesList->countries_list;

require 'converter_form.php';

