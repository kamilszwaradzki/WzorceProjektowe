<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AmerykanskaFabrykaSkladnikowPizzy
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class AmerykanskaFabrykaSkladnikowPizzy extends FabrykaSkladnikowPizzy {

    public function utworzCiasto() {
        return new GrubeChrupkieCiasto();
    }

    public function utworzSos() {
        return new SosPomidorowy();
    }

    public function utworzSer() {
        return new SerMozzarella();
    }

    public function utworzWarzywa() {
        $warzywa = [
                        new CzarneOliwki(),
                        new Szpinak(),
                        new Baklazan()
                    ];
        return $warzywa;
    }

    public function utworzPepperoni() {
        return new PlastryPepperoni();
    }

    public function utworzMalze() {
        return new MrozoneMalze();
    }
}
