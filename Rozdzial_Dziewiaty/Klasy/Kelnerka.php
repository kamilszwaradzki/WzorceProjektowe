<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kelnerka
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class Kelnerka {
    public PancakeHouseMenu $pancakeHouseMenu;
    public DinerMenu $dinerMenu;

    public function __construct(PancakeHouseMenu $pancakeHouseMenu, DinerMenu $dinerMenu) {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function drukujMenu(WPIterator $iterator = null) {
        if ($iterator === null) {
            $pancakeIterator = $this->pancakeHouseMenu->utworzIterator();
            $dinerIterator = $this->dinerMenu->utworzIterator();

            printf("MENU<br/>----<br/>ŚNIADANIA<br/>");
            $this->drukujMenu($pancakeIterator);
            printf("<br/>LUNCH<br/>");
            $this->drukujMenu($dinerIterator);
        } else {
            while($iterator->hasNext()) {
                $pozycjaMenu = $iterator->next();
                printf("%s, ", $pozycjaMenu->pobierzNazwa());
                printf("%.2f -- ", $pozycjaMenu->pobierzCena());
                printf("%s<br/>", $pozycjaMenu->pobierzOpis());
            }
        }
    }
}