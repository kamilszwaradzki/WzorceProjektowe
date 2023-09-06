<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DzikaKaczka
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class DzikaKaczka extends Kaczka {
    public function kwacz() {
        printf("Kwa! Kwa!<br/>");
    }

    public function lataj() {
        printf("O rany! Latam!<br/>");
    }
}
