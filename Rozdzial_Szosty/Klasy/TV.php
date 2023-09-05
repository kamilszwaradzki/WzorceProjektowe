<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of TV
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class TV {
    public string $miejsce;
    public int $kanal;

    public function __construct(string $miejsce) {
        $this->miejsce = $miejsce;
    }

    public function wlacz() {
        printf("%s telewizor włączony<br/>", $this->miejsce);
    }

    public function wylacz() {
        printf("%s telewizor wyłączony<br/>", $this->miejsce);
    }
    public function ustawKanal() {
        $this->kanal = 3;
        printf("%s kanał telewizyjny ustawiony na DVD<br/>", $this->miejsce);
    }
}
