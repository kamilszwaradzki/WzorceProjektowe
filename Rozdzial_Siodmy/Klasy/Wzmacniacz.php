<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Wzmacniacz
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Wzmacniacz {
    public string $opis;
    public Tuner $tuner;
    public OdtwarzaczDvd $dvd;
    public OdtwarzaczCD $cd;

    public function __construct(string $opis) {
        $this->opis = $opis;
    }

    public function wlacz() {
        printf("%s włączony<br/>", $this->opis);
    }

    public function wylacz() {
        printf("%s wyłączony<br/>", $this->opis);
    }

    public function ustawDzwiekStereo() {
        printf("%s włączono tryb stereo<br/>", $this->opis);
    }

    public function ustawDzwiekPrzestrzenny() {
        printf("%s włączono dźwięk przestrzenny (5 głośników, 1 subwoofer)<br/>", $this->opis);
    }

    public function ustawGlosnosc(int $poziom) {
        printf("%s siła głosu ustawiona na wartość %s<br/>", $this->opis, $poziom);
    }

    public function ustawTuner(Tuner $tuner) {
        printf("%s ustawienie tuner na %s<br/>", $this->opis, $this->dvd);
        $this->tuner = $tuner;
    }

    public function ustawDvd(OdtwarzaczDVD $dvd) {
        printf("%s ustawienie Odtwarzacza DVD na %s<br/>", $this->opis, $dvd);
        $this->dvd = $dvd;
    }

    public function ustawCd(OdtwarzaczCD $cd) {
        printf("%s ustawienie Odtwarzacza CD na %s<br/>", $this->opis, $this->cd);
        $this->cd = $cd;
    }

    public function __toString() {
        return $this->opis;
    }
}