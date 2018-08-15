<?php

namespace App;

use App\FixerCurrency;

class CurrentCurrency
{
    public function getCountries()
    {
      $get_countries = new FixerCurrency(getenv('CURRENCY_SYMBOLS_ENDPOINT'));
      $countries_list = $get_countries->getContent();

      return $countries_list;

    }

    public function currentCurrency()
    {

    }
}