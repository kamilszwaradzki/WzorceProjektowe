<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of NapojZKofeina
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
abstract class NapojZKofeina {
    final function recepturaParzenia() {
        $this->gotowanieWody();
        $this->zaparzanie();
        $this->nalewanieDoFilizanki();
        $this->domieszanieDodatkow();
    }

    abstract function zaparzanie();

    abstract function domieszanieDodatkow();

    function gotowanieWody() {
        printf("Gotowanie wody<br/>");
    }

    function nalewanieDoFilizanki() {
        printf("Nalewanie do filiżanki<br/>");
    }
}