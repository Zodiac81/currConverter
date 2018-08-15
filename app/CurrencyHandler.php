<?php

use App\CurrentCurrency;
//require 'CurrentCurrency.php';

if(isset($_POST['request']) && !empty($_POST['request']))
{
    // print_r($_POST['request']);
      $from = $_POST['request']['from'];
      $to   = $_POST['request']['to'];
      $amount = $_POST['request']['amount'];

//    $get_result = new CurrentCurrency();
//    $cc = $get_result->getCurrentCurrency();

    //echo json_encode(['status'=>$amount]);
}

