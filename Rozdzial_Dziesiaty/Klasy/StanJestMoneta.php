<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StanJestMoneta
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class StanJestMoneta extends Stan {
    public AutomatSprzedajacy $automatSprzedajacy;

    public function __construct(AutomatSprzedajacy $automatSprzedajacy) {
        $this->automatSprzedajacy = $automatSprzedajacy;
    }

    public function wlozMonete() {
        printf("Nie możesz włożyć więcej niż jednej monety<br/>");
    }

    public function zwrocMonete() {
        printf("Moneta zwrócona<br/>");
        $this->automatSprzedajacy->ustawStan($this->automatSprzedajacy->pobierzStanNieMaMonety());
    }

    public function przekrecGalke() {
        printf("Obróciłeś gałkę...<br/>");
        $wygrana = random_int(0, 10);
        if ($wygrana == 0) {
            $this->automatSprzedajacy->ustawStan($this->automatSprzedajacy->pobierzStanWygrana());
        } else {
            $this->automatSprzedajacy->ustawStan($this->automatSprzedajacy->pobierzStanGumaSprzedana());
        }
    }

    public function wydaj() {
        printf("Nie wydano gumy<br/>");
    }
    public function __toString() {
        return 'oczekuje na przekręcenie gałki';
    }
}
