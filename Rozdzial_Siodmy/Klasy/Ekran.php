<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Ekran
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Ekran {
    public string $opis;

    public function __construct(string $opis) {
        $this->opis = $opis;
    }

    public function wGore() {
        printf("%s podnoszony<br/>", $this->opis);
    }

    public function wDol() {
        printf("%s opuszczony<br/>", $this->opis);
    }

    public function __toString() {
        return $this->opis;
    }
}
