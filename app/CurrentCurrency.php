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

    public function getCurrentCurrency($amount, $from, $to)
    {
         $from_curr = $from;
         $to_curr = $to;
         $total = $amount;

         $get_currency = new FixerCurrency(getenv('CURRENCY_LATEST_ENDPOINT'));
         $lastest_currency = $get_currency->getContent();

         $result = ($lastest_currency['rates'][$to_curr]/$lastest_currency['rates'][$from_curr]) * $total;
         return $result;
    }
}