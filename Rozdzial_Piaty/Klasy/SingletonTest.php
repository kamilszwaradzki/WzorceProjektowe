<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SingletonTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class SingletonTest {
    public static function execute() {
        Singleton::pobierzInstancje();
        $inst = CzekoladowyKociol::pobierzInstancje();
        $inst->napelniaj();
        $inst->napelniaj();
    }
}
