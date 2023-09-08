<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FabrykaKaczekZLicznikiem
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class FabrykaKaczekZLicznikiem extends AbstrakcyjnaFabrykaKaczek {

    public function utworzDzikaKaczka(): Kwaczaca {
        return new KwakLicznik(new DzikaKaczka());
    }

    public function utworzPlaskonosKaczka(): Kwaczaca {
        return new KwakLicznik(new PlaskonosKaczka());
    }

    public function utworzWabikKaczka(): Kwaczaca {
        return new KwakLicznik(new WabikKaczka());
    }

    public function utworzGumowaKaczka(): Kwaczaca {
        return new KwakLicznik(new GumowaKaczka());
    }
}