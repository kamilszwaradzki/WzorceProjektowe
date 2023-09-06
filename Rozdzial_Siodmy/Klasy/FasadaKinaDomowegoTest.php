<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FasadaKinaDomowegoTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class FasadaKinaDomowegoTest {
    public static function execute() {
        $wzmacniacz = new Wzmacniacz('Wzmacniacz:');
        $tuner = new Tuner('Tuner:', $wzmacniacz);
        $dvd = new OdtwarzaczDVD('Odtwarzacz DVD:', $wzmacniacz);
        $cd = new OdtwarzaczCD('Odtwarzacz CD:', $wzmacniacz);
        $projektor = new Projektor('Projektor:', $dvd);
        $ekran = new Ekran('Ekran:');
        $oswietlenie = new OswietlenieKinowe('Oświetlenie sufitowe kina:');
        $popcorn = new MaszynkaPopcorn('Maszynka do robienia popcornu:');
        $kinoDomowe = new FasadaKinaDomowego($wzmacniacz, $tuner, $dvd, $cd, $projektor, $ekran, $oswietlenie, $popcorn);
        $kinoDomowe->odtwarzanieFilmu('Poszukiwacze zaginionej arki');
        $kinoDomowe->koniecFilmu();
    }
}
