<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of OwoceMorzaPizza
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class OwoceMorzaPizza extends Pizza {
    public FabrykaSkladnikowPizzy $fabrykaSkladnikow;

    public function __construct(FabrykaSkladnikowPizzy $fabrykaSkladnikow) {
        $this->fabrykaSkladnikow = $fabrykaSkladnikow;
    }

    public function przygotowanie() {
        printf("Przygotowywanie: %s<br/>", $this->nazwa);
        $this->ciasto = $this->fabrykaSkladnikow->utworzCiasto();
        $this->sos = $this->fabrykaSkladnikow->utworzSos();
        $this->ser = $this->fabrykaSkladnikow->utworzSer();
        $this->malze = $this->fabrykaSkladnikow->utworzMalze();
    }
}
