<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Swiatlo
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class Swiatlo {
    public string $miejsce;

    public function __construct(string $miejsce) {
        $this->miejsce = $miejsce;
    }

    public function wlacz() {
        printf("Światło włączone<br/>");
    }

    public function wylacz() {
        printf("Światło wyłączone<br/>");
    }
}
