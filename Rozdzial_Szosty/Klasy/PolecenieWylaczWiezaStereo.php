<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWylaczWiezaStereo
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWylaczWiezaStereo extends Polecenie {
    public WiezaStereo $wiezaStereo;

    public function __construct(WiezaStereo $wiezaStereo) {
        $this->wiezaStereo = $wiezaStereo;
    }

    public function wykonaj() {
        $this->wiezaStereo->wylacz();
    }

    public function wycofaj() {
        $this->wiezaStereo->wlacz();
    }

    public function __toString() {
        return self::class;
    }
}