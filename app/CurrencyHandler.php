<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/env.php';

use App\CurrentRate;
require_once 'CurrentRate.php';

if(isset($_POST['request']) && !empty($_POST['request']))
{
      $from = $_POST['request']['from'];
      $to   = $_POST['request']['to'];
      $currency_sum = $_POST['request']['cc_val'];

      $get_result = new CurrentRate(getenv('CURRENCY_LATEST_ENDPOINT'));
      $currency = $get_result->getCurrentCurrency($from, $to, $currency_sum);

      echo json_encode(['status'=>'success','cc'=>$currency]);
}

