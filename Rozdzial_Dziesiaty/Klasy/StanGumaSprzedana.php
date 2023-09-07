<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StanGumaSprzedana
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class StanGumaSprzedana extends Stan {
    public AutomatSprzedajacy $automatSprzedajacy;

    public function __construct(AutomatSprzedajacy $automatSprzedajacy) {
        $this->automatSprzedajacy = $automatSprzedajacy;
    }

    public function wlozMonete() {
        printf("Proszę czekać na gumę<br/>");
    }

    public function zwrocMonete() {
        printf("Niestety, nie można zwrócić monety po przekręceniu gałki<br/>");
    }

    public function przekrecGalke() {
        printf("Nie dostaniesz gumy tylko dlatego, że przekręciłeś drugi raz!<br/>");
    }

    public function wydaj() {
        $this->automatSprzedajacy->zwolnijGume();
        if ($this->automatSprzedajacy->pobierzLiczba() > 0) {
            $this->automatSprzedajacy->ustawStan($this->automatSprzedajacy->pobierzStanNieMaMonety());
        } else {
            printf("Ups, koniec gum!<br/>");
            $this->automatSprzedajacy->ustawStan($this->automatSprzedajacy->pobierzStanBrakGum());
        }
    }
    public function __toString() {
        return ($this->automatSprzedajacy->pobierzLiczba() == 1 ? 'wydaje gumę' : 'wydaje gumy');
    }
}
