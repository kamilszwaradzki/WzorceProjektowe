<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CurrencyConverterController
 *
 * @link https://r.je/mvc-tutorial-real-application-example source
 * @author Dr. Tom Butler
 */

class CurrencyConverterController {

    private CurrencyConverter $currencyConverter;

    public function __construct(CurrencyConverter $currencyConverter) {
        $this->currencyConverter = $currencyConverter;
    }

    public function convert($request) {
        if (isset($request['currency']) && isset($request['amount'])) {
            $this->currencyConverter->set($request['amount'], $request['currency']);
        }
    }
}