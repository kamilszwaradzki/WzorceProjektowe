<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MakroPolecenie
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class MakroPolecenie extends Polecenie {
    public array $polecenia;

    public function __construct(array $polecenia) {
        $this->polecenia = $polecenia;
    }

    public function wykonaj() {
        for($i = 0; $i < count($this->polecenia); $i++) {
            $this->polecenia[$i]->wykonaj();
        }
    }

    public function wycofaj() {
        for($i = 0; $i < count($this->polecenia); $i++) {
            $this->polecenia[$i]->wycofaj();
        }
    }

    public function __toString() {
        return self::class;
    }    
}