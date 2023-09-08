<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Stado
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Stado extends Kwaczaca {
    public array $ptaki = [];

    public function dodaj(Kwaczaca $ptak) {
        array_push($this->ptaki, $ptak);
    }

    public function kwacz(): void {
        while(current($this->ptaki) !== false) {
            $ptak = current($this->ptaki);
            $ptak->kwacz();
            next($this->ptaki);
        }
        reset($this->ptaki);
    }

    public function powiadomObserwatorow(): void { }

    public function zarejstrujObserwatora(Obserwator $obserwator): void {
        while(current($this->ptaki) !== false) {
            $ptak = current($this->ptaki);
            $ptak->zarejstrujObserwatora($obserwator);
            next($this->ptaki);
        }
        reset($this->ptaki);
    }

    public function __toString() {
        return 'Stado kaczek';
    }
}