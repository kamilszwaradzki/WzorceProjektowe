<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWlaczTV
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWlaczTV extends Polecenie {
    public TV $tv;

    public function __construct(TV $tv) {
        $this->tv = $tv;
    }

    public function wykonaj() {
        $this->tv->wlacz();
        $this->tv->ustawKanal();
    }

    public function wycofaj() {
        $this->tv->wylacz();
    }

    public function __toString() {
        return self::class;
    }
}
