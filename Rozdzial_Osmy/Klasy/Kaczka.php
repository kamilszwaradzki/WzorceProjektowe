<?php
require_once 'Rozdzial_Osmy/Interfejsy/ComparableInterfejs.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kaczka
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class Kaczka implements ComparableInterfejs {
    public string $nazwa;
    public int $waga;

    public function __construct(string $nazwa, int $waga) {
        $this->nazwa = $nazwa;
        $this->waga = $waga;
    }

    public function __toString() {
        return $this->nazwa . " waży " . $this->waga;
    }

    public static function sort(array &$kaczki)
    {
        uasort($kaczki, array('self', 'compareTo'));
    }

    public static function compareTo(Kaczka $taKaczka, Kaczka $object) {
        $innaKaczka = $object;

        if ($taKaczka->waga < $innaKaczka->waga) {
            return -1;
        } else if ($taKaczka->waga === $innaKaczka->waga) {
            return 0;
        } else {
            return 1;
        }
    }
}
