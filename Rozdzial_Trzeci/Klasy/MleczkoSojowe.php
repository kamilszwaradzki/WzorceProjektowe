<?php
require_once 'SkladnikDekorator.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MleczkoSojowe
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class MleczkoSojowe extends SkladnikDekorator {
    public function __construct(Napoj $napoj) {
        $this->napoj = $napoj;
    }

    public function pobierzOpis() {
        return $this->napoj->pobierzOpis() . ', Mleczko Sojowe';
    }
    public function koszt() {
        return $this->napoj->koszt() + 0.15;
    }
}
