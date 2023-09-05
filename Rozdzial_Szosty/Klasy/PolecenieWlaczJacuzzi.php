<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWlaczJacuzzi
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWlaczJacuzzi extends Polecenie {
    public Jacuzzi $jacuzzi;

    public function __construct(Jacuzzi $jacuzzi) {
        $this->jacuzzi = $jacuzzi;
    }

    public function wykonaj() {
        $this->jacuzzi->wlacz();
        $this->jacuzzi->ustawTemperature(30);
        $this->jacuzzi->obieg();
    }

    public function wycofaj() {
        $this->jacuzzi->wylacz();
    }

    public function __toString() {
        return self::class;
    }
}
