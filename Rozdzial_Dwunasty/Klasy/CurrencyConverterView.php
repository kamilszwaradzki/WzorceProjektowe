<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CurrencyConverterView
 *
 * @link https://r.je/mvc-tutorial-real-application-example source
 * @author Dr. Tom Butler
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class CurrencyConverterView {

    private CurrencyConverter $converter;
    private $currency;

    public function __construct(CurrencyConverter $converter, $currency) {
        $this->converter = $converter;
        $this->currency = $currency;
    }

    public function output() {
        $html = '<form action="?action=convert" method="post">'
                .    '<input name="currency" type="hidden" value="' . $this->currency .'"/>'
                .    '<label>' . $this->currency .':</label>'
                .    '<input name="amount" type="text" value="' . $this->converter->get($this->currency) . '"/>'
                .    '<input type="submit" value="Convert"/>'
                .    '</form>';
        return $html;
    }
}