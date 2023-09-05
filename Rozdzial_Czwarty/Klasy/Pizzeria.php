<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pizzeria
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
abstract class Pizzeria {

    public function zamowPizza(string $typ) {
        $pizza = $this->utworzPizza($typ);
        $pizza->przygotowanie();
        $pizza->pieczenie();
        $pizza->krojenie();
        $pizza->pakowanie();
        return $pizza;
    }

    protected abstract function utworzPizza(string $typ);
}
