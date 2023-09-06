<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of OdtwarzaczDVD
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class OdtwarzaczDVD {
    public string $opis;
    public int $obecnaSciezka;
    public Wzmacniacz $wzmacniacz;
    public string $film;

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
        $this->film = '';
        printf("%s wysuwanie dysku DVD<br/>", $this->opis);
    }

    public function odtwarzaj(string $film, int $sciezka = null) {
        if (!isset($sciezka)) {
            $this->film = $film;
            $this->obecnaSciezka = 0;
            printf("%s odtwarzanie filmu \"%s\"<br/>", $this->opis, $this->film);
        } else {
            if ($this->film === '') {
                printf("%s nie może odtworzyć ścieżki %d, brak płyty dvd<br/>", $this->opis, $sciezka);
            } else {
                $this->obecnaSciezka = $sciezka;
                printf("%s odtwarzanie ścieżki %d \"%s\"<br/>",$this->opis, $this->obecnaSciezka, $this->film);
            }
        }
    }

    public function zatrzymaj() {
        $this->obecnaSciezka = 0;
        printf("%s koniec odtwarzania filmu \"%s\"<br/>", $this->opis, $this->film);
    }

    public function pauza() {
        printf("%s zapauzował film \"%s\"<br/>", $this->opis, $this->film);
    }

    public function ustawDzwiekStereo() {
        printf("%s ustawia dźwięk stereo<br/>", $this->opis);
    }

    public function ustawDzwiekPrzestrzenny() {
        printf("%s ustawia dźwięk przestrzenny<br/>", $this->opis);
    }

    public function __toString() {
        return $this->opis;
    }
}
