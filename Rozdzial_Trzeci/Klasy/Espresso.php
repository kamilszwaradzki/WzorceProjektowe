<?php
require_once 'Napoj.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Espresso
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class Espresso extends Napoj {
    public function __construct() {
        $this->opis = "Kawa Espresso";
    }

    public function koszt() {
        return 1.99;
    }
}
