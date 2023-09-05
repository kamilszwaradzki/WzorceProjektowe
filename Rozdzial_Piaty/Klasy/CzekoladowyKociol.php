<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CzekoladowyKociol
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class CzekoladowyKociol {
    private bool $pusty;
    private bool $ugotowany;
    private static CzekoladowyKociol $unikalnaInstancja;

    public function __construct() {
        $this->pusty = true;
        $this->ugotowany = false;
    }

    public static function pobierzInstancje() {
        if (!isset(self::$unikalnaInstancja)) {
            self::$unikalnaInstancja = new CzekoladowyKociol();
        }
        return self::$unikalnaInstancja;
    }

    public function napelniaj() {
        if($this->jestPusty()) {
            $this->pusty = false;
            $this->ugotowany = false;
            printf("Napełniam bojler mieszanką mleka i czekolady...<br/>");
        } else {
            printf("Uwaga! Bojler nie jest pusty. Nie mogę napełnić go mieszanką.<br/>");
        }
    }

    private function jestPusty() {
        return $this->pusty;
    }
}
