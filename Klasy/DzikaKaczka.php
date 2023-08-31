<?php
require_once 'Kaczka.php';
require_once 'Kwacz.php';
require_once 'LatamBoMamSkrzydla.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DzikaKaczka
 *
 * @author tom
 */
class DzikaKaczka extends Kaczka {
    public function __construct() {
        $this->kwakanieInterfejs = new Kwacz();
        $this->latanieInterfejs = new LatamBoMamSkrzydla();
    }
}
