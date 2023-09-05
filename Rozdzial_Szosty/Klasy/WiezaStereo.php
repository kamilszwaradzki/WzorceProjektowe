<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of WiezaStereo
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class WiezaStereo {
    public string $miejsce;

    public function __construct(string $miejsce) {
        $this->miejsce = $miejsce;
    }
    public function wlacz() {
        printf("%s Wieża Stereo włączone<br/>", $this->miejsce);
    }

    public function wylacz() {
        printf("%s Wieża Stereo wyłączone<br/>", $this->miejsce);
    }

    public function ustawCD() {
        printf("%s Wieża Stereo przełączona na wejście CD<br/>", $this->miejsce);
    }

    public function ustawDVD() {
        printf("%s Wieża Stereo przełączona na wejście DVD<br/>", $this->miejsce);
    }

    public function ustawRadio() {
        printf("%s Wieża Stereo przełączona na Radio<br/>", $this->miejsce);
    }

    public function ustawGlosnosc(int $glosnosc) {
        printf("%s Wieża Stereo głośność ustawiona na %d<br/>", $this->miejsce, $glosnosc);
    }   
}