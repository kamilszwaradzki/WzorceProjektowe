<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CurrencyConverterTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class CurrencyConverterTest {
    public static function execute() {
        $model = new CurrencyConverter;
        $controller = new CurrencyConverterController($model);

        //Check for presence of $_GET['action'] to see if a controller action is required
        if (isset($_GET['action'])) $controller->{$_GET['action']}($_POST);

        $gbpView = new CurrencyConverterView($model, 'GBP');
        echo $gbpView->output();

        $usdView = new CurrencyConverterView($model, 'USD');
        echo $usdView->output();

        $eurView = new CurrencyConverterView($model, 'EUR');
        echo $eurView->output();

        $yenView = new CurrencyConverterView($model, 'YEN');
        echo $yenView->output();
    }
}
