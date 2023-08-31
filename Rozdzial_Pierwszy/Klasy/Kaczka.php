<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kaczka
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
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

    public function ustawLatanieInterfejs(Latanie $li) {
        $this->latanieInterfejs = $li;
    }

    public function ustawKwakanieInterfejs(Kwakanie $ki) {
        $this->kwakanieInterfejs = $ki;
    }

    function wyswietl() {
        return 'Wygląda jak zwyczajna kaczka';
    }
    
}
