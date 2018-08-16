<?php

namespace App;

final class CurrentRate implements CurrentRateInterface
{
    public $countries_list;
    public $cc_rates;

    public function __construct($envConst)
    {
        $get_data = new FixerCurrency($envConst);
        $data = $get_data->getContent();

        self::sort_entering_data($data);

    }

    private function sort_entering_data($data)
    {
        if(isset($data['symbols']) && !empty($data['symbols']))
        {
            $this->countries_list = $data['symbols'];
        }

        if(isset($data['rates']) && !empty($data['rates']))
        {
            $this->cc_rates = $data['rates'];
        }

    }

    public function getCurrentCurrency($from, $to, $val)
    {
        $currency_unit = $this->cc_rates[$to]/$this->cc_rates[$from];
        $result = sprintf("%.2f",$currency_unit * $val);

        return $result;
    }

}