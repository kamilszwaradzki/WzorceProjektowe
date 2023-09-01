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
 * Description of PrognozaWyswietlanie
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class PrognozaWyswietlanie extends Obserwator implements ObserwatorInterfejs, WyswietlElementInterfejs {
    private float $obecneCisnienie = 29.92;  
    private float $ostatnieCisnienie;
    private Podmiot $danePogodowe;

    public function __construct(Podmiot $danePogodowe) {
        $this->danePogodowe = $danePogodowe;
        $this->danePogodowe->zarejstrujObserwatora($this);
     }

    public function aktualizacja(float $temperatura = null, float $wilgotnosc = null, float $cisnienie) {
        $this->ostatnieCisnienie = $this->obecneCisnienie;
        $this->obecneCisnienie = $cisnienie;
        $this->wyswietl();
    }
 
    public function wyswietl() {
        printf("Prognoza pogody: <br/>");
        if ($this->obecneCisnienie > $this->ostatnieCisnienie) {
                printf("Nadchodzi poprawa pogody!<br/>");
        } else if ($this->obecneCisnienie == $this->ostatnieCisnienie) {
                printf("Jeszcze raz to samo<br/>");
        } else if ($this->obecneCisnienie < $this->ostatnieCisnienie) {
                printf("Uwaga na chłodniejszą, deszczową pogodę<br/>");
        }
    }
}
