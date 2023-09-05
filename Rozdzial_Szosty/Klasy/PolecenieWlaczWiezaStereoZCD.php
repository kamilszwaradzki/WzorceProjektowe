<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWlaczWiezaStereoZCD
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWlaczWiezaStereoZCD extends Polecenie {
    public WiezaStereo $wiezaStereo;

    public function __construct(WiezaStereo $wiezaStereo) {
        $this->wiezaStereo = $wiezaStereo;
    }

    public function wykonaj() {
        $this->wiezaStereo->wlacz();
        $this->wiezaStereo->ustawCD();
        $this->wiezaStereo->ustawGlosnosc(11);
    }

    public function wycofaj() {
        $this->wiezaStereo->wylacz();
    }

    public function __toString() {
        return self::class;
    }
}