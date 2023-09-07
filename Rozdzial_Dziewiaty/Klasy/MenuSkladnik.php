<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MenuSkladnik
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
abstract class MenuSkladnik {
    public function dodaj(MenuSkladnik $menuSkladnik) { }

    public function usun(MenuSkladnik $menuSkladnik) { }

    public function pobierzPotomek(int $i) { }

    public function pobierzNazwa() { }

    public function pobierzOpis() { }

    public function pobierzCena() { }

    public function jestWegetarianska() { }
}
