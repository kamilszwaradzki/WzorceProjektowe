<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of TestSortowanieKaczek
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class TestSortowanieKaczek {
    public static function execute() {
        $kaczki = [
            new Kaczka("Kaczor Daffy", 8),
            new Kaczka("Kaczor Dewey", 2),
            new Kaczka("Kaczor Howard", 7),
            new Kaczka("Kaczor Louie", 2),
            new Kaczka("Kaczor Donald", 10),
            new Kaczka("Kaczor Huey", 2)
        ];

        printf("<br/>Przed sortowaniem:<br/>");
        self::wyswietlaj($kaczki);

        Kaczka::sort($kaczki);

        printf("<br/>Po zakończeniu sortowania:<br/>");
        self::wyswietlaj($kaczki);
    }

    public static function wyswietlaj(array $kaczki) {
        foreach ($kaczki as $kaczka) {
            printf("%s<br/>", $kaczka);
        }
    }
}
