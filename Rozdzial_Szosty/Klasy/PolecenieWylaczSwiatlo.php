<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWylaczSwiatlo
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWylaczSwiatlo extends Polecenie {
    public Swiatlo $swiatlo;

    public function __construct(Swiatlo $swiatlo) {
        $this->swiatlo = $swiatlo;
    }
    public function wykonaj() {
        $this->swiatlo->wylacz();
    }

    public function wycofaj() {
        $this->swiatlo->wlacz();
    }

    public function __toString() {
        return self::class;
    }
}
