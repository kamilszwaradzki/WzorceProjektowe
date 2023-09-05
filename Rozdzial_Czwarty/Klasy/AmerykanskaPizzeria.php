<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AmerykanskaPizzeria
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class AmerykanskaPizzeria extends Pizzeria {
    protected function utworzPizza(string $typ) {
        $pizza = null;
        $fabrykaSkladnikow = new AmerykanskaFabrykaSkladnikowPizzy();
        if ($typ === 'serowa') {
            $pizza = new SerowaPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Amerykańska Pizza Serowa");
        } elseif ($typ === 'wegetariańska') {
            $pizza = new WegetarianskaPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Amerykańska Pizza Wegetariańska");
        } elseif ($typ === 'owoce morza') {
            $pizza = new OwoceMorzaPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Amerykańska Pizza Owoce Morza");
        } elseif ($typ === 'pepperoni') {
            $pizza = new PepperoniPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Amerykańska Pizza Pepperoni");
        }
        return $pizza;
    }
}
