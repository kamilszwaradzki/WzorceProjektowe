<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DinerMenu
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class DinerMenu {
    const MAKS_LICZBA_ELEMENTOW = 6;
    public int $liczbaElementow = 0;
    public array $pozycjeMenu;

    public function __construct() {
        $this->pozycjeMenu = [];

        $this->dodajElement("Wegetariańska kanapka BSP",
                "(Wegetariański) Boczek z sałatą i pomidorem, chleb pszenny pełnoziarnisty",
                true,
                2.99);
        $this->dodajElement("Kanapka BSP",
                "Boczek z sałatą i pomidorem, chleb pszenny pełnoziarnisty",
                false,
                2.99);
        $this->dodajElement("Zupa dnia",
                "Zupa dnia i sałatka z pomidorami",
                false,
                3.29);
        $this->dodajElement("Hot-dog",
                "Hot-dog z kiszoną kapustą, rzodkiewką, cebulą i dodatkiem sera",
                false,
                3.05);
        $this->dodajElement("Warzywa na parze i brązowy ryż",
                "Mieszanka warzyw gotowanych i brązowego pełnowartościowego ryżu",
                true,
                3.99);
    }

    public function utworzIterator() {
        return new DinerMenuIterator($this->pozycjeMenu);
    }

    public function dodajElement(string $nazwa, string $opis,
        bool $wegetarianska, float $cena)
    {
        $pozycjaMenu = new PozycjaMenu($nazwa, $opis, $wegetarianska, $cena);
        if ($this->liczbaElementow >= self::MAKS_LICZBA_ELEMENTOW) {
            printf("Niestety, menu jest pełne! Nie można dodać nowej pozycji<br/>");
        } else {
            array_push($this->pozycjeMenu, $pozycjaMenu);
            $this->liczbaElementow = $this->liczbaElementow + 1;
        }
    }

    public function pobierzPozycjeMenu() {
        return $this->pozycjeMenu;
    }
}