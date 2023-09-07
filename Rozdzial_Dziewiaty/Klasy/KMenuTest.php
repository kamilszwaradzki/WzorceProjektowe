<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of KMenuTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class KMenuTest {
    public static function execute() {
        $pancakeHouseMenu = new Menu("MENU PANCAKE HOUSE", "Śniadania");
        $dinerMenu = new Menu("MENU RESTAURACJI DINER", "Lunch");
        $uJackaMenu = new Menu("MENU U JACKA", "Obiady");
        $deseryMenu = new Menu("MENU DESERÓW", "Desery, oczywiście!");

        $wszystkieMenu = new Menu("WSZYSTKIE MENU", "Połączone menu");
        $wszystkieMenu->dodaj($pancakeHouseMenu);
        $wszystkieMenu->dodaj($dinerMenu);
        $wszystkieMenu->dodaj($uJackaMenu);
        $pancakeHouseMenu->dodaj(new KPozycjaMenu("Śniadanie naleśnikowe K&amp;B",
                "Naleśniki z jajecznicą i tostem",
                true,
                2.99));
        $pancakeHouseMenu->dodaj(new KPozycjaMenu("Śniadanie naleśnikowe zwykłe",
                "Naleśniki z jajkiem sadzonym i kiełbasą",
                false,
                2.99));
        $pancakeHouseMenu->dodaj(new KPozycjaMenu("Naleśniki z jagodami",
                "Naleśniki ze świeżymi jagodami",
                true,
                3.49));
        $pancakeHouseMenu->dodaj(new KPozycjaMenu("Wafle nadziewane",
                "Wafle z jagodami lub truskawkami",
                true,
                3.59));

        $dinerMenu->dodaj(new KPozycjaMenu("Wegetariańska kanapka BSP",
                "(Wegetariański) Boczek z sałatą i pomidorem, chleb pszenny pełnoziarnisty",
                true,
                2.99));
        $dinerMenu->dodaj(new KPozycjaMenu("Kanapka BSP",
                "Boczek z sałatą i pomidorem, chleb pszenny pełnoziarnisty",
                false,
                2.99));
        $dinerMenu->dodaj(new KPozycjaMenu("Zupa dnia",
                "Zupa dnia i sałatka z pomidorami",
                false,
                3.29));
        $dinerMenu->dodaj(new KPozycjaMenu("Hot-dog",
                "Hot-dog z kiszoną kapustą, rzodkiewką, cebulą i dodatkiem sera",
                false,
                3.05));
        $dinerMenu->dodaj(new KPozycjaMenu("Warzywa na parze i brązowy ryż",
                "Mieszanka warzyw gotowanych i brązowego pełnowartościowego ryżu",
                true,
                3.99));
        $dinerMenu->dodaj(new KPozycjaMenu(
                "Spaghetti",
                "Makaron spaghetti z sosem marinara i kromka chleba na zakwasie",
                true,
                3.89));
        $dinerMenu->dodaj($deseryMenu);

        $deseryMenu->dodaj(new KPozycjaMenu(
                "Szarlotka",
                "Szarlotka z lodami waniliowymi",
                true,
                1.59));
        $deseryMenu->dodaj(new KPozycjaMenu(
                "Sernik",
                "Sernik nowojorski w polewie czekoladowej",
                true,
                1.99));
        $deseryMenu->dodaj(new KPozycjaMenu(
                "Sorbet",
                "Poziomki z limonką",
                true,
                1.89));

        $uJackaMenu->dodaj(new KPozycjaMenu(
                "Kanapka wegetariańska z frytkami",
                "Kanapka wegetariańska z sałatą i pomidorem, frytkami",
                true,
                3.99));
        $uJackaMenu->dodaj(new KPozycjaMenu(
                "Zupa dnia",
                "Filiżanka zupy dnia, sałatka",
                true,
                3.69));
        $uJackaMenu->dodaj(new KPozycjaMenu(
                "Burito",
                "Duże burito z łaciatą fasolą, sosem salsa i guacamole (awokado)",
                true,
                4.29));

        $kelnerka = new KKelnerka($wszystkieMenu);

        $kelnerka->drukujMenu();
    }
}