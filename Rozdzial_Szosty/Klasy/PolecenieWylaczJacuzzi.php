<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWylaczJacuzzi
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWylaczJacuzzi extends Polecenie {
    public Jacuzzi $jacuzzi;

    public function __construct(Jacuzzi $jacuzzi) {
        $this->jacuzzi = $jacuzzi;
    }

    public function wykonaj() {
        $this->jacuzzi->ustawTemperature(23);
        $this->jacuzzi->wylacz();
    }

    public function wycofaj() {
        $this->jacuzzi->wlacz();
    }

    public function __toString() {
        return self::class;
    }
}
