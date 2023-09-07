<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of KKelnerka
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class KKelnerka {
    public MenuSkladnik $wszystkieMenu;

    public function __construct(MenuSkladnik $wszystkieMenu) {
        $this->wszystkieMenu = $wszystkieMenu;
    }

    public function drukujMenu() {
        $this->wszystkieMenu->drukuj();
    }
}