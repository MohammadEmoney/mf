<?php

namespace App\Services;

class CheckoutService
{

    private $pricing_rules;

    public $total = 0;

    public function __constrcut($pricing_rules)
    {
        $this->pricing_rules = $pricing_rules;
    }

    public function scan(string $item)
    {
        //TODO of add item
        $this->total = 0;
    }

}
