<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of NapojeJazdaProbna
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class NapojeJazdaProbna {
    public static function execute() {
        $herbata = new Herbata();
        $kawa = new Kawa();

        printf("<br/>Przyrządzam wspaniałą, gorącą herbatę...<br/>");
        $herbata->recepturaParzenia();

        printf("<br/>A teraz pora na gorącą, aromatyczną kawę...<br/>");
        $kawa->recepturaParzenia();

        $herbataZHaczykiem = new HerbataZHaczykiem();
        $kawaZHaczykiem = new KawaZHaczykiem();

        printf("<br/>Przyrządzam wspaniałą, gorącą herbatę...<br/>");
        $herbataZHaczykiem->recepturaParzenia();

        printf("<br/>A teraz pora na gorącą, aromatyczną kawę...<br/>");
        $kawaZHaczykiem->recepturaParzenia();
    }
}
