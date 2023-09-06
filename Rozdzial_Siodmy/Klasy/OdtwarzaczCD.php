<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of OdtwarzaczCD
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class OdtwarzaczCD {
    public string $opis;
    public int $obecnaSciezka;
    public Wzmacniacz $wzmacniacz;
    public string $tytul;

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

    public function wysunDysk() {
        $this->tytul = null;
        printf("%s wysunięto<br/>", $this->opis);
    }

    public function odtwarzaj(string $tytul, int $sciezka = null) {
        if(!isset($sciezka)){
            $this->tytul = $tytul;
            $this->obecnaSciezka = 0;
            printf("%s odtwarzanie \"%s\"<br/>", $this->opis, $this->tytul);
        } else {
            if ($this->tytul == null) {
                printf("%s nie może odtworzyć ścieżki %d, brak płyty cd<br/>",
                        $this->opis, $this->obecnaSciezka);
            } else {
                $this->obecnaSciezka = $sciezka;
                printf("%s odtwarzanie ścieżki %d<br/>", $this->opis, $this->obecnaSciezka);
            }
        }
    }

    public function zatrzymaj() {
        $this->obecnaSciezka = 0;
        printf("%s zatrzymany<br/>", $this->opis);
    }

    public function pauza() {
        printf("%s zapauzował \"%s\"<br/>", $this->opis, $this->tytul);
    }

    public function __toString() {
        return $this->opis;
    }
}
