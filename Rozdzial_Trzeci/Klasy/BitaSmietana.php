<?php
require_once 'SkladnikDekorator.php';
require_once 'Napoj.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of BitaSmietana
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class BitaSmietana extends SkladnikDekorator {
    public function __construct(Napoj $napoj) {
        $this->napoj = $napoj;
    }

    public function pobierzOpis() {
        return $this->napoj->pobierzOpis() . ", Bita Śmietana";
    }

    public function koszt() {
        return $this->napoj->koszt() + 0.10;
    }
}
