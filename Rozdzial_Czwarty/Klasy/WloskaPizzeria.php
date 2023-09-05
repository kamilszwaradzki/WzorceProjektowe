<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of WloskaPizzeria
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class WloskaPizzeria extends Pizzeria {

    protected function utworzPizza(string $typ) {
        $pizza = null;
        $fabrykaSkladnikow = new WloskaFabrykaSkladnikowPizzy();
        if ($typ === 'serowa') {
            $pizza = new SerowaPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Włoska Pizza Serowa");
        } elseif ($typ === 'wegetariańska') {
            $pizza = new WegetarianskaPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Włoska Pizza Wegetariańska");
        } elseif ($typ === 'owoce morza') {
            $pizza = new OwoceMorzaPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Włoska Pizza Owoce Morza");
        } elseif ($typ === 'pepperoni') {
            $pizza = new PepperoniPizza($fabrykaSkladnikow);
            $pizza->ustawNazwa("Włoska Pizza Pepperoni");
        }
        return $pizza;
    }
}
