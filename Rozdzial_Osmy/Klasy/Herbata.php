<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Herbata
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function($class_name) {
    require_once $class_name . '.php';
});

class Herbata extends NapojZKofeina {
    public function zaparzanie() {
        printf("Wkładanie torebki herbaty do wrzątku<br/>");
    }

    public function domieszanieDodatkow() {
        printf("Dodawanie cytryny<br/>");
    }
}