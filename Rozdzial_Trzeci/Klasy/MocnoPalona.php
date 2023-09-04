<?php
require_once 'Napoj.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MocnoPalona
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class MocnoPalona extends Napoj {
    public function __construct() {
        $this->opis = 'Kawa Mocno Palona';
    }

    public function koszt() {
        return 0.99;
    }
}
