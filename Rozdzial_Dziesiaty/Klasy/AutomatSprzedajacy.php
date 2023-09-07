<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AutomatSprzedajacy
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class AutomatSprzedajacy {
    public Stan $stanBrakGum;
    public Stan $stanNieMaMonety;
    public Stan $stanJestMoneta;
    public Stan $stanGumaSprzedana;
    public Stan $stanWygrana;

    public Stan $stan;
    public int $liczba = 0;

    public function __construct(int $liczbaGum) {
        $this->stanBrakGum = new StanBrakGum($this);
        $this->stanNieMaMonety = new StanNieMaMonety($this);
        $this->stanJestMoneta = new StanJestMoneta($this);
        $this->stanGumaSprzedana = new StanGumaSprzedana($this);
        $this->stanWygrana = new StanWygrana($this);

        $this->liczba = $liczbaGum;
        if ($liczbaGum > 0) {
            $this->stan = $this->stanNieMaMonety;
        }
    }

    public function wlozMonete() {
        $this->stan->wlozMonete();
    }

    public function zwrocMonete() {
        $this->stan->zwrocMonete();
    }

    public function przekrecGalke() {
        $this->stan->przekrecGalke();
        $this->stan->wydaj();
    }

    public function ustawStan(Stan $stan) {
        $this->stan = $stan;
    }

    public function zwolnijGume() {
        printf("Wypada guma...<br/>");
        if ($this->liczba != 0) {
            $this->liczba = $this->liczba - 1;
        }
    }

    public function pobierzLiczba() {
        return $this->liczba;
    }

    public function pobierzStanBrakGum() {
        return $this->stanBrakGum;
    }

    public function pobierzStanNieMaMonety() {
        return $this->stanNieMaMonety;
    }

    public function pobierzStanJestMoneta() {
        return $this->stanJestMoneta;
    }

    public function pobierzStanGumaSprzedana() {
        return $this->stanGumaSprzedana;
    }

    public function pobierzStanWygrana() {
        return $this->stanWygrana;
    }

    public function __toString() {
        $wynik = "";
        $wynik .= sprintf("<br/>Automaty Sprzedające SA");
        $wynik .= sprintf("<br/>Wolnostojący automat sprzedający Gumball Model #2004 PHP");
        $wynik .= sprintf("<br/>Zapas: %d gum", $this->liczba);
        if ($this->liczba == 1) {
            $wynik .= sprintf("a");
        }
        $wynik .= sprintf("<br/>");
        $wynik .= sprintf("Automat %s<br/>", $this->stan);
        return $wynik;
    }
}