<?php

use App\CurrentCurrency;
require_once 'CurrentCurrency.php';

if(isset($_POST['request']) && !empty($_POST['request']))
{
      $from = $_POST['request']['from'];
      $to   = $_POST['request']['to'];
      $amount = $_POST['request']['amount'];
     
 
     $get_result = new CurrentCurrency();
     //print_r($get_result->hello('100','4.5','15.7')) ;
   //print_r($get_result->hello());
     echo $get_result->hello();
   
}

