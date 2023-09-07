<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of KawaZHaczykiem
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function($class_name) {
    require_once $class_name . '.php';
});

class KawaZHaczykiem extends NapojZKofeinaZHaczykiem {
    public function zaparzanie() {
        printf("Zaparzenie i przesączanie kawy przez filtr<br/>");
    }

    public function domieszanieDodatkow() {
        printf("Dodawanie cukru oraz mleka do smaku<br/>");
    }

    public function czyKlientChceDodatki() {
        $odpowiedz = $this->pobierzOdpowiedzi();

        if (strtolower($odpowiedz) === 'tak') {
            return true;
        } else {
            return false;
        }
    }

    private function pobierzOdpowiedzi() {
        $odpowiedz = (isset($_POST['wyslij']) && isset($_POST['chce_dodatki_kaw'])
                ? $_POST['chce_dodatki_kaw']
                : null);
        if ($odpowiedz === null) {
            return "nie";
        }
        return $odpowiedz;
    }
}