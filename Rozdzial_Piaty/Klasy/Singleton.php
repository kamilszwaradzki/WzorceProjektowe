<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Singleton
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class Singleton {
    private static Singleton $unikalnaInstancja;

    private function __construct() { printf('Brawo! Udało ci się stworzyć nowy obiekt!<br/>'); }

    public static function pobierzInstancje() {
        if(!isset(self::$unikalnaInstancja)) {
            self::$unikalnaInstancja = new Singleton();
        }
        return self::$unikalnaInstancja;
    }
}
