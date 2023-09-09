<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CurrencyConverter
 * The Model
 * @link https://r.je/mvc-tutorial-real-application-example source
 * @author Dr. Tom Butler
 */
class CurrencyConverter {

    private $baseValue = 0;
    private $rates = [
        'GBP' => 1.0,
        'USD' => 0.6,
        'EUR' => 0.83,
        'YEN' => 0.0058
    ];

    public function get($currency) {
        if (isset($this->rates[$currency])) {
            $rate = 1 / $this->rates[$currency];
            return round($this->baseValue * $rate, 2);
        } else {
            return 0;
        }
    }

    public function set($amount, $currency = 'GBP') {
        if (isset($this->rates[$currency])) {
            $this->baseValue = $amount * $this->rates[$currency];
        }
    }
}