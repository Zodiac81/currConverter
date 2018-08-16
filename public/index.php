<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/env.php';

use App\CurrentRate;

$getCountriesList = new CurrentRate(getenv('CURRENCY_SYMBOLS_ENDPOINT'));
$countries = $getCountriesList->countries_list;

require 'converter_form.php';

