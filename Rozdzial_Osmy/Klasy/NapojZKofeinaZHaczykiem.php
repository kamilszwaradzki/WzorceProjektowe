<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of NapojZKofeinaZHaczykiem
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
abstract class NapojZKofeinaZHaczykiem {
    final function recepturaParzenia() {
        $this->gotowanieWody();
        $this->zaparzanie();
        $this->nalewajDoFilizanki();
        if ($this->czyKlientChceDodatki()) {
            $this->domieszanieDodatkow();
        }
    }

    abstract function zaparzanie();

    abstract function domieszanieDodatkow();

    function gotowanieWody() {
        printf("Gotowanie wody<br/>");
    }

    function nalewajDoFilizanki() {
        printf("Nalewanie do filiżanki<br/>");
    }

    function czyKlientChceDodatki() {
        return true;
    }
}