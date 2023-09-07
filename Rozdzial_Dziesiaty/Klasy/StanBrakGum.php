<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StanBrakGum
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class StanBrakGum extends Stan {
    public AutomatSprzedajacy $automatSprzedajacy;

    public function __construct(AutomatSprzedajacy $automatSprzedajacy) {
        $this->automatSprzedajacy = $automatSprzedajacy;
    }

    public function wlozMonete() {
        printf("Nie można wrzucić monety, automat jest pusty<br/>");
    }

    public function zwrocMonete() {
        printf("Nie można zwrócić monety, żadna moneta nie została wrzucona<br/>");
    }

    public function przekrecGalke() {
        printf("Obróciłeś gałkę, ale automat jest pusty<br/>");
    }

    public function wydaj() {
        printf("Nie wydano gumy<br/>");
    }

    public function __toString() {
        return 'pusty';
    }
}
