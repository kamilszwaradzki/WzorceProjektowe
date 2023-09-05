<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of WloskaFabrykaSkladnikowPizzy
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class WloskaFabrykaSkladnikowPizzy extends FabrykaSkladnikowPizzy {

    public function utworzCiasto() {
        return new CienkieChrupkieCiasto();
    }

    public function utworzSos() {
        return new SosMarinara();
    }

    public function utworzSer() {
        return new SerReggiano();
    }

    public function utworzWarzywa() {
        $warzywa = [
                        new Czosnek(),
                        new Cebula(),
                        new Pieczarki(),
                        new CzerwonaPapryka()
                    ];
        return $warzywa;
    }

    public function utworzPepperoni() {
        return new PlastryPepperoni();
    }

    public function utworzMalze() {
        return new SwiezeMalze();
    }
}
