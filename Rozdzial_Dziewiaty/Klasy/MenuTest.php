<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MenuTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class MenuTest {
    public static function execute() {
        $pancakeHouseMenu = new PancakeHouseMenu();
        $dinerMenu = new DinerMenu();

        $kelnerka = new Kelnerka($pancakeHouseMenu, $dinerMenu);

        $kelnerka->drukujMenu();
    }
}