<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kaczka
 *
 * @author tom
 */
abstract class Kaczka {
    
    public Latanie $latanieInterfejs;
    public Kwakanie $kwakanieInterfejs;
    public function wykonajLec() {
        $this->latanieInterfejs->lec();
    }
    public function wykonajKwacz() {
        $this->kwakanieInterfejs->kwacz();
    }
    function wyswietl() {
        return 'Wygląda jak zwyczajna kaczka';
    }
    function lec() {
        return 'fru fru';
    }
    
}
