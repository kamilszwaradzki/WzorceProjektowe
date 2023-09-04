<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StarCafe
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class StarCafe {
    private static function println(Napoj $n) {
        printf("%s %.2f zł<br/>", $n->pobierzOpis(), $n->koszt());        
    }
    public static function execute() {
        $napoj = new Espresso();
        self::println($napoj);

        $napoj2 = new MocnoPalona();
        $napoj2 = new Czekolada($napoj2);
        $napoj2 = new Czekolada($napoj2);
        $napoj2 = new BitaSmietana($napoj2);
        self::println($napoj2);
        
        $napoj3 = new StarCafeSpecial();
        $napoj3 = new MleczkoSojowe($napoj3);
        $napoj3 = new Czekolada($napoj3);
        $napoj3 = new BitaSmietana($napoj3);
        self::println($napoj3);
    }
}
