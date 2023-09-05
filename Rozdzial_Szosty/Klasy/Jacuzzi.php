<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Jacuzzi
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class Jacuzzi {
    public bool $wlaczone;
    public int $temperatura = 0;

    public function wlacz() {
        $this->wlaczone = true;
   }

    public function wylacz() {
        $this->wlaczone = false;
    }

    public function obieg() {
        if ($this->wlaczone) { printf("Jacuzzi bąbelki włączone<br/>"); }
    }

    public function dyszeWlacz() {
        if ($this->wlaczone) { printf("Dysze Jacuzzi włączone<br/>"); }
    }
    public function dyszeWylacz() {
        if ($this->wlaczone) { printf("Dysze Jacuzzi wyłączone<br/>"); }
    }

    public function ustawTemperature(int $temperatura) {
        if ($temperatura > $this->temperatura) {
            printf("Jacuzzi włączone na %d stopni Celsjusza<br/>", $temperatura);
        }
        else {
            printf("Jacuzzi ochłodzenie wody do %d stopni Celsjusza<br/>", $temperatura);
        }
        $this->temperatura = $temperatura;
    }
}