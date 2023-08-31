<?php
require_once 'Kaczka.php';
require_once 'Piszcz.php';
require_once 'NieLatam.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of GumowaKaczka
 *
 * @author tom
 */
class GumowaKaczka extends Kaczka {
    public function __construct() {
        $this->kwakanieInterfejs = new Piszcz();
        $this->latanieInterfejs = new NieLatam();
    }
}
