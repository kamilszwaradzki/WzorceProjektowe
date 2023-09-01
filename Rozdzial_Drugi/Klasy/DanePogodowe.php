<?php
require_once 'Rozdzial_Drugi/Interfejsy/PodmiotInterfejs.php';
require_once 'Obserwator.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DanePogodowe
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class DanePogodowe extends Podmiot implements PodmiotInterfejs {
    private array $obserwatorzy;
    private float $temperatura;
    private float $wilgotnosc;
    private float $cisnienie;

    public function __construct() {
        $this->obserwatorzy = [];
    }

    public function zarejstrujObserwatora(Obserwator $o) {
        array_push($this->obserwatorzy, $o);
    }

    public function usunObserwatora(Obserwator $o) {
        $i = array_search($o, $this->obserwatorzy, true);
        if ($i === false) {
            array_splice($this->obserwatorzy, $i);
        }
    }

   public function powiadomObserwatorow() {
       foreach ($this->obserwatorzy as $o) {
           $o->aktualizacja($this->temperatura, $this->wilgotnosc, $this->cisnienie);
       }
    }

    public function odczytyZmiana() {
        $this->powiadomObserwatorow();
    }

    public function ustawOdczyty(float $temperatura, float $wilgotnosc, float $cisnienie) {
        $this->temperatura = $temperatura;
        $this->wilgotnosc = $wilgotnosc;
        $this->cisnienie = $cisnienie;
        $this->odczytyZmiana();
    }

    public function pobierzTemperature() {
        return $this->temperatura;
    }

    public function pobierzWilgotnosc() {
        return $this->wilgotnosc;
    }

    public function pobierzCisnienie() {
        return $this->cisnienie;
    }
}