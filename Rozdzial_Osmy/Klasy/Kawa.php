<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kawa
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function($class_name) {
    require_once $class_name . '.php';
});

class Kawa extends NapojZKofeina {
    public function zaparzanie() {
        printf("Zaparzenie i przesączanie kawy przez filtr<br/>");
    }

    public function domieszanieDodatkow() {
        printf("Dodawanie cukru i mleka do smaku<br/>");
    }
}