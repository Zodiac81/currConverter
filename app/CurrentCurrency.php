<?php

namespace App;

use App\FixerCurrency;
use App\Ah;

class CurrentCurrency
{
    public $countries_list;

    public function __construct($envConst)
    {
        $get_data = new FixerCurrency($envConst);
        $data = $get_data->getContent();

       if( $data['symbols'] == true)
       {
            $this->countries_list = $data['symbols'];
       }
        
         // print_r( $this->countries_list);
    }


    // public function getCountries()
    // {
    //   $get_countries = new FixerCurrency(getenv('CURRENCY_SYMBOLS_ENDPOINT'));
    //   $countries_list = $get_countries->getContent();

    //   return $countries_list;

    // }

    public function getCurrentCurrency($from,$to,$amount)
    {
         $from_curr = $from;
         $to_curr = $to;
         $total = $amount;

         $get_currency = new FixerCurrency(getenv('CURRENCY_LATEST_ENDPOINT'));
         $lastest_currency = $get_currency->getContent();

         $result = ($lastest_currency['rates'][$to_curr]/$lastest_currency['rates'][$from_curr]) * $total;
         return $result;
    }

     public function hello(){
        self::getCurrentCurrency("USD", "EUR", 100);
       // $a = new Ah;
       // $b = $a->getAh();
       //   return $b;
    } 
    // public function hello2(){
    //    echo 'this is h2';
    //    // $a = new Ah;
    //    // $b = $a->getAh();
    //    //   return $b;
    // }
}