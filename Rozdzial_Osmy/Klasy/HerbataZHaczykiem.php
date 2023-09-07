<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of HerbataZHaczykiem
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function($class_name) {
    require_once $class_name . '.php';
});

class HerbataZHaczykiem extends NapojZKofeinaZHaczykiem {
    public function zaparzanie() {
        printf("Wkładanie torebki herbaty do wrzątku<br/>");
    }

    public function domieszanieDodatkow() {
        printf("Dodawanie cytryny<br/>");
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
        $odpowiedz = (isset($_POST['wyslij']) && isset($_POST['chce_dodatki_her'])
                ? $_POST['chce_dodatki_her']
                : null);
        if ($odpowiedz === null) {
            return "nie";
        }
        return $odpowiedz;
    }
}