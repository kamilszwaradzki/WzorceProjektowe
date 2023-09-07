<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Menu
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Menu extends MenuSkladnik {
    public array $menuSkladniki = [];
    public string $nazwa;
    public string $opis;

    public function __construct(string $nazwa, string $opis) {
        $this->nazwa = $nazwa;
        $this->opis = $opis;
    }

    public function dodaj(MenuSkladnik $menuSkladnik) {
        array_push($this->menuSkladniki, $menuSkladnik);
    }
    
    public function usun(MenuSkladnik $menuSkladnik) {
        array_splice($this->menuSkladniki, array_search($menuSkladnik, $this->menuSkladniki));
    }

    public function pobierzPotomek(int $i) {
        return $this->menuSkladniki[$i];
    }

    public function pobierzNazwa() {
        return $this->nazwa;
    }

    public function pobierzOpis() {
        return $this->opis;
    }

    public function drukuj() {
        printf("<br/>%s", $this->pobierzNazwa());
        printf(", %s<br/>", $this->pobierzOpis());
        printf("------------------<br/>");

        while(current($this->menuSkladniki) !== false) {
            $menuSkladnik = current($this->menuSkladniki);
            $menuSkladnik->drukuj();
            next($this->menuSkladniki);
        }
    }
}