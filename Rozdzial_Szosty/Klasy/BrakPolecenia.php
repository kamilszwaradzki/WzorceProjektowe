<?php
require_once "Polecenie.php";

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of BrakPolecenia
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class BrakPolecenia extends Polecenie {
    public function wykonaj() { }
    public function wycofaj() { }
    public function __toString() {
     return self::class;
 }
}
