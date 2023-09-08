<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Obserwowany
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class Obserwowany extends KwakObserwowany {
    public array $obserwatorzy = [];
    public KwakObserwowany $kaczka;

    public function __construct(KwakObserwowany $kaczka) {
        $this->kaczka = $kaczka;
    }

    public function zarejstrujObserwatora(Obserwator $obserwator): void {
        array_push($this->obserwatorzy, $obserwator);
    }

    public function powiadomObserwatorow(): void {
        while(current($this->obserwatorzy) !== false) {
            $obserwator = current($this->obserwatorzy);
            $obserwator->aktualizuj($this->kaczka);
            next($this->obserwatorzy);
        }
        reset($this->obserwatorzy);
    }
}