<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of OswietlenieKinowe
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class OswietlenieKinowe {
    public string $opis;

    public function __construct(string $opis) {
        $this->opis = $opis;
    }

    public function wlacz() {
        printf("%s włączone 100%%<br/>", $this->opis);
    }

    public function wylacz() {
        printf("%s wyłączony<br/>", $this->opis);
    }

    public function sciemniaj(int $poziom) {
        printf("%s ściemniono do %d%%<br/>", $this->opis, $poziom);
    }

    public function __toString() {
        return $this->opis;
    }
}
