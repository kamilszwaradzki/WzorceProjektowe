<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of TestowanieKaczki
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class TestowanieKaczki {
    public static function execute() {
        $kaczka = new DzikaKaczka();

        $indyk = new DzikiIndyk();
        $indykAdapter = new IndykAdapter($indyk);

        printf("---- Indyk powiada tak...<br/>");
        $indyk->gulgocz();
        $indyk->lataj();

        printf("---- Kaczka powiada tak...<br/>");
        self::testujKaczke($kaczka);

        printf("<br/>---- A IndykAdapter powiada tak...<br/>");
        self::testujKaczke($indykAdapter);
    }
    
    public static function testujKaczke(Kaczka $kaczka) {
        $kaczka->kwacz();
        $kaczka->lataj();
    }
}
