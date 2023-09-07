<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PancakeHouseMenu
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class PancakeHouseMenu {
    public array $pozycjeMenu;

    public function __construct() {
        $this->pozycjeMenu = [];

        $this->dodajElement("Śniadanie naleśnikowe K&amp;B",
                "Naleśniki z jajecznicą i tostem",
                true,
                2.99);
        $this->dodajElement("Śniadanie naleśnikowe zwykłe",
                "Naleśniki z jajkiem sadzonym i kiełbasą",
                false,
                2.99);
        $this->dodajElement("Naleśniki z jagodami",
                "Naleśniki ze świeżymi jagodami",
                true,
                3.49);
        $this->dodajElement("Wafle nadziewane",
                "Wafle z jagodami lub truskawkami",
                true,
                3.59);
    }

    public function dodajElement(string $nazwa, string $opis,
            bool $wegetarianska, float $cena)
    {
        $pozycjaMenu = new PozycjaMenu($nazwa, $opis, $wegetarianska, $cena);
        array_push($this->pozycjeMenu, $pozycjaMenu);
    }

    public function pobierzPozycjeMenu() {
        return $this->pozycjeMenu;
    }

    public function utworzIterator() {
        return new PancakeHouseMenuIterator($this->pozycjeMenu);
    }
}