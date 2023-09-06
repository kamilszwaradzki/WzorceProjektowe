<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Projektor
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Projektor {
    public string $opis;
    public OdtwarzaczDVD $odtwarzaczDVD;

    public function __construct(string $opis, OdtwarzaczDVD $odtwarzaczDVD) {
        $this->opis = $opis;
        $this->odtwarzaczDVD = $odtwarzaczDVD;
    }

    public function wlacz() {
        printf("%s włączony<br/>", $this->opis);
    }

    public function wylacz() {
        printf("%s wyłączony<br/>", $this->opis);
    }

    public function trybSzerokoekranowy() {
        printf("%s tryb szerokoekranowy (16:9)<br/>", $this->opis);
    }

    public function trybTelewizyjny() {
        printf("%s tryb telewizyjny (4:3)<br/>", $this->opis);
    }

    public function __toString() {
        return $this->opis;
    }
}
