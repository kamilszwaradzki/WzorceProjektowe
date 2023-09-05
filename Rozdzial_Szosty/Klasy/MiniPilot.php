<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MiniPilot
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class MiniPilot {
    public Polecenie $slot;

    public function __construct() {
    }

    public function ustawPolecenie(Polecenie $polecenie) {
        $this->slot = $polecenie;
    }

    public function przyciskZostalNacisniety() {
        $this->slot->wykonaj();
    }
}
