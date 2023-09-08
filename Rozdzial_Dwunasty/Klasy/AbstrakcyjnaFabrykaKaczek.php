<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AbstrakcyjnaFabrykaKaczek
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

abstract class AbstrakcyjnaFabrykaKaczek {
    public abstract function utworzDzikaKaczka(): Kwaczaca;
    public abstract function utworzPlaskonosKaczka(): Kwaczaca;
    public abstract function utworzWabikKaczka(): Kwaczaca;
    public abstract function utworzGumowaKaczka(): Kwaczaca;
}