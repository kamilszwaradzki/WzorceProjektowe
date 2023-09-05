<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SuperPilot
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class SuperPilot {
    public array $poleceniaWlacz;
    public array $poleceniaWylacz;

    public function __construct() {
        $this->poleceniaWlacz = array();
        $this->poleceniaWylacz = array();

        $brakPolecenia = new BrakPolecenia();
        for ($i = 0; $i < 7; $i++) {
            $this->poleceniaWlacz[$i] = $brakPolecenia;
            $this->poleceniaWylacz[$i] = $brakPolecenia;
        }
    }

    public function ustawPolecenie(int $slot, Polecenie $polecenieWlacz, Polecenie $polecenieWylacz) {
        $this->polecenieWlacz[$slot] = $polecenieWlacz;
        $this->polecenieWylacz[$slot] = $polecenieWylacz;
    }

    public function wcisnietoPrzyciskWlacz(int $slot) {
        $this->poleceniaWlacz[$slot]->wykonaj();
    }

    public function wcisnietoPrzyciskWylacz(int $slot) {
        $this->poleceniaWylacz[$slot]->wykonaj();
    }

    public function __toString() {
        $wynik = "";
        $wynik .= sprintf("<br/>------ SuperPilot ------<br/>");
        for($i = 0; $i < count($this->poleceniaWlacz); $i++) {
            $wynik .= sprintf("[slot %d] %s   %s<br/>", $i, $this->poleceniaWlacz[$i], $this->poleceniaWylacz[$i]);
        }
        return $wynik;
    }
}
