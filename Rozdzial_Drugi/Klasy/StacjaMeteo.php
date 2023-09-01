<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StacjaMeteo
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class StacjaMeteo {
    public static function execute() {
        $danePogodowe = new DanePogodowe();
        $warunkiBiezaceWyswietl = new WarunkiBiezaceWyswietl($danePogodowe);
        $statystykaPogodowa = new StatystykaWyswietlanie($danePogodowe);
        $prognozaWyswietl = new PrognozaWyswietlanie($danePogodowe);
        $indeksCieplaWyswietl = new IndeksCieplaWyswietlanie($danePogodowe);
        
        $danePogodowe->ustawOdczyty(26.6, 65, 1013.1);
        $danePogodowe->ustawOdczyty(27.7, 70, 997.0);
        $danePogodowe->ustawOdczyty(25.5, 90, 997.0);
    }
}
