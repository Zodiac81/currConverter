<?php

namespace App;


interface CurrentRateInterface
{
    public function getCurrentCurrency($from, $to, $val);
}