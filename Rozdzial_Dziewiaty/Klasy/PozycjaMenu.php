<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PozycjaMenu
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class PozycjaMenu {
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
}