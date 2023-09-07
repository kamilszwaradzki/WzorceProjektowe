<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StanNieMaMonety
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class StanNieMaMonety extends Stan {
    public AutomatSprzedajacy $automatSprzedajacy;

    public function __construct(AutomatSprzedajacy $automatSprzedajacy) {
        $this->automatSprzedajacy = $automatSprzedajacy;
    }

    public function wlozMonete() {
        printf("Moneta przyjęta<br/>");
        $this->automatSprzedajacy->ustawStan($this->automatSprzedajacy->pobierzStanJestMoneta());
    }

    public function zwrocMonete() {
        printf("Nie włożyłeś monety<br/>");
    }

    public function przekrecGalke() {
        printf("Zanim przekręcisz gałkę, wrzuć monetę<br/>");
    }

    public function wydaj() {
        printf("Najpierw zapłać<br/>");
    }

    public function __toString() {
        return 'oczekuje na monetę';
    }
}
