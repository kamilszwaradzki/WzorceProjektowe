<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PizzaTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PizzaTest {
    public static function execute() {
        $wloska = new WloskaPizzeria();
        $amerykanska = new AmerykanskaPizzeria();

        $pizza = $wloska->zamowPizza('serowa');
        printf("Eryk zamówił: %s <br/><br/>", $pizza);

        $pizza = $amerykanska->zamowPizza('serowa');
        printf("Jacek zamówił: %s <br/><br/>", $pizza);

        $pizza = $wloska->zamowPizza('owoce morza');
        printf("Eryk zamówił: %s <br/><br/>", $pizza);

        $pizza = $amerykanska->zamowPizza('owoce morza');
        printf("Jacek zamówił: %s <br/><br/>", $pizza);
        
        $pizza = $wloska->zamowPizza('pepperoni');
        printf("Eryk zamówił: %s <br/><br/>", $pizza);

        $pizza = $amerykanska->zamowPizza('pepperoni');
        printf("Jacek zamówił: %s <br/><br/>", $pizza);

        $pizza = $wloska->zamowPizza('wegetariańska');
        printf("Eryk zamówił: %s <br/><br/>", $pizza);

        $pizza = $amerykanska->zamowPizza('wegetariańska');
        printf("Jacek zamówił: %s <br/><br/>", $pizza);
    }
}
