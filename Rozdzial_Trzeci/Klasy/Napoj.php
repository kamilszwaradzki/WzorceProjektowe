<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Napoj
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
abstract class Napoj {
    protected string $opis = "Napój nieznany.";
    
    public function pobierzOpis() {
        return $this->opis;
    }
    public abstract function koszt();
}
