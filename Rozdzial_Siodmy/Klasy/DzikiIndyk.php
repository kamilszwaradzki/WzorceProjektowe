<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DzikiIndyk
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class DzikiIndyk extends Indyk {
    public function gulgocz() {
        printf("Gulgulgul!<br/>");
    }
    public function lataj() {
        printf("O rany! Latam!... ale tylko na krótkich dystansach!<br/>");
    }
}
