<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of KPozycjaMenu
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class KPozycjaMenu extends MenuSkladnik {
    public string $nazwa;
    public string $opis;
    public bool $wegetarianska;
    public float $cena;

    public function __construct(string $nazwa,
            string $opis,
            bool $wegetarianska,
            float $cena)
    {
        $this->nazwa = $nazwa;
        $this->opis = $opis;
        $this->wegetarianska = $wegetarianska;
        $this->cena = $cena;
    }

    public function pobierzNazwa() {
        return $this->nazwa;
    }

    public function pobierzOpis() {
        return $this->opis;
    }

    public function pobierzCena() {
        return $this->cena;
    }

    public function jestWegetarianska() {
        return $this->wegetarianska;
    }

    public function drukuj() {
        printf("  %s", $this->pobierzNazwa());
        if ($this->jestWegetarianska()) {
            printf("(w)");
        }
        printf(", %.2f<br/>", $this->pobierzCena());
        printf("       -- %s<br/>", $this->pobierzOpis());
    }
}