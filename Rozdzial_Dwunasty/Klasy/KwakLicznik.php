<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of KwakLicznik
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class KwakLicznik extends Kwaczaca {
    public Kwaczaca $kaczka;
    private static int $liczbaKwakniec = 0;

    public function __construct(Kwaczaca $kaczka) {
        $this->kaczka = $kaczka;
    }

    public function kwacz(): void {
        $this->kaczka->kwacz();
        self::$liczbaKwakniec++;
    }

    public static function pobierzLiczbaKwakniec() {
        return self::$liczbaKwakniec;
    }

    public function powiadomObserwatorow(): void {
        $this->kaczka->powiadomObserwatorow();
    }

    public function zarejstrujObserwatora(Obserwator $obserwator): void {
        $this->kaczka->zarejstrujObserwatora($obserwator);
    }

    public function __toString() {
        return $this->kaczka;
    }
}