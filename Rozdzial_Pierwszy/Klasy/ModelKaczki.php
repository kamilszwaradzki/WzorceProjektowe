<?php
require_once 'Kaczka.php';
require_once 'NieLatam.php';
require_once 'Kwacz.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ModelKaczki
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class ModelKaczki extends Kaczka {
    public function __construct() {
        $this->latanieInterfejs = new NieLatam();
        $this->kwakanieInterfejs = new Kwacz();
    }
    public function wyswietl() {
        printf("%s<br/>", 'Jestem modelem kaczki!');
    }
}
