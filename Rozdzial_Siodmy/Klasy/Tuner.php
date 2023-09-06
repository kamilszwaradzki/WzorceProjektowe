<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Tuner
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Tuner {
    public string $opis;
    public Wzmacniacz $wzmacniacz;
    public float $czestotliwosc;

    public function __construct(string $opis, Wzmacniacz $wzmacniacz) {
        $this->opis = $opis;
        $this->wzmacniacz = $wzmacniacz;
    }

    public function wlacz() {
        printf("%s włączony<br/>", $this->opis);
    }

    public function wylacz() {
        printf("%s wyłączony<br/>", $this->opis);
    }

    public function ustawCzestotliwosc(float $czestotliwosc) {
        printf("%s ustaw częstotliwość na %.2f<br/>", $this->opis, $czestotliwosc);
        $this->czestotliwosc = $czestotliwosc;
    }

    public function ustawAm() {
        printf("%s ustawiono tryb AM<br/>", $this->opis);
    }

    public function ustawFm() {
        printf("%s ustawiono tryb FM<br/>", $this->opis);
    }

    public function __toString() {
        return $this->opis;
    }
}
