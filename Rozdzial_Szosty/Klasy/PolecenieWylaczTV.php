<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWylaczTV
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWylaczTV extends Polecenie {
    public TV $tv;

    public function __construct(TV $tv) {
        $this->tv = $tv;
    }

    public function wykonaj() {
        $this->tv->wylacz();
    }

    public function wycofaj() {
        $this->tv->wlacz();
    }

    public function __toString() {
        return self::class;
    }
}
