<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MaszynkaPopcorn
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class MaszynkaPopcorn {
    public string $opis;

    public function __construct(string $opis) {
        $this->opis = $opis;
    }

    public function wlacz() {
        printf("%s włączona<br/>", $this->opis);
    }

    public function wylacz() {
        printf("%s wyłączona<br/>", $this->opis);
    }

    public function przygotujPopcorn() {
        printf("%s popcorn w drodze!<br/>", $this->opis);
    }

    public function __toString() {
        return $this->opis;
    }
}
