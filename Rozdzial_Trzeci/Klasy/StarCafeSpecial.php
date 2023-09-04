<?php
require_once 'Napoj.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StarCafeSpecial
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class StarCafeSpecial extends Napoj {
    public function __construct() {
        $this->opis = "Kawa Star Cafe Special";
    }

    public function koszt() {
        return 0.89;
    }
}
