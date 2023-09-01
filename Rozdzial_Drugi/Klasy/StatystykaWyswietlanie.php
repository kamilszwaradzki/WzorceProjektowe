<?php
require_once 'Rozdzial_Drugi/Interfejsy/ObserwatorInterfejs.php';
require_once 'Rozdzial_Drugi/Interfejsy/WyswietlElementInterfejs.php';
require_once 'Obserwator.php';
require_once 'Podmiot.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StatystykaWyswietlanie
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class StatystykaWyswietlanie extends Obserwator implements ObserwatorInterfejs, WyswietlElementInterfejs {
    private float $maxTemp = 0.00;
    private float $minTemp = 275.00;
    private float $sumaTemp = 0.00;
    private int $liczbaOdczytow = 0;
    public Podmiot $danePogodowe;

    public function __construct(Podmiot $danePogodowe) {
        $this->danePogodowe = $danePogodowe;
        $this->danePogodowe->zarejstrujObserwatora($this);
    }

    public function aktualizacja(float $temperatura, float $wilgotnosc = null, float $cisnienie = null) {
        $this->sumaTemp += $temperatura;
        $this->liczbaOdczytow++;

        if ($temperatura > $this->maxTemp) {
                $this->maxTemp = $temperatura;
        }

        if ($temperatura < $this->minTemp) {
                $this->minTemp = $temperatura;
        }
        $this->wyswietl();
    }

    public function wyswietl() {
        printf("Średnia/Max/Min temperatura = %.2f/%.2f/%.2f stopni C<br/>", ($this->sumaTemp / $this->liczbaOdczytow), $this->maxTemp, $this->minTemp); // Wyświetl wartość średnią, minimalną oraz maksymalną poszczególnych wielkości
    }
}
