<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kwakolog
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Kwakolog extends Obserwator {
    public function aktualizuj(KwakObserwowany $kaczka): void {
        printf("Kwakolog: %s kwaknęła<br/>", $kaczka);
    }

    public function __toString() {
        return 'Kwakolog';
    }    
}