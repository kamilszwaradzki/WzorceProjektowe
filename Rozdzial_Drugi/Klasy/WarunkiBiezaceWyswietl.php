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
 * Description of WarunkiBiezace
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class WarunkiBiezaceWyswietl extends Obserwator implements ObserwatorInterfejs, WyswietlElementInterfejs {
    private float $temperatura;
    private float $wilgotnosc;
    private Podmiot $danePogodowe;

    public function __construct(Podmiot $danePogodowe) {
        $this->danePogodowe = $danePogodowe;
        $this->danePogodowe->zarejstrujObserwatora($this);
    }

    public function aktualizacja(float $temperatura, float $wilgotnosc, float $cisnienie = null) {
        $this->temperatura = $temperatura;
        $this->wilgotnosc = $wilgotnosc;
        $this->wyswietl();
    }

    public function wyswietl() {
        printf("Warunki bieżące %.2f stopni C oraz %.2f %% wilgotność<br/>", $this->temperatura, $this->wilgotnosc);
    }
}
