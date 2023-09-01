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
 * Description of IndeksCieplaWyswietlanie
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class IndeksCieplaWyswietlanie extends Obserwator implements ObserwatorInterfejs, WyswietlElementInterfejs {
    public float $indeksCiepla = 0.0;
    public Podmiot $danePogodowe;
    
    public function __construct(Podmiot $danePogodowe) {
        $this->danePogodowe = $danePogodowe;
        $this->danePogodowe->zarejstrujObserwatora($this);
    }

    public function aktualizacja(float $temp, float $wilgotnosc, float $cisnienie = null) {
        $this->indeksCiepla = $this->obliczIndeksCiepla($temp, $wilgotnosc);
        $this->wyswietl();
    }

    private function obliczIndeksCiepla(float $t, float $rh) {
            $t = (float)(($t * 9.00 / 5.00) + 32.00);
            $indeks = (float)((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) 
                    + (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) 
                    + (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
                    (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 * 
                    ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) + 
                    (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +
                    0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
                    (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
            return (float)(($indeks-32.00)*5.00)/9.00;
    }

    public function wyswietl(){
        printf("Indeks Ciepła wynosi %f<br/>", $this->indeksCiepla);
    }
}
