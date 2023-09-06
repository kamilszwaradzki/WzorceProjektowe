<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of IndykAdapter
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class IndykAdapter extends Kaczka {
    public Indyk $indyk;

    public function __construct(Indyk $indyk) {
        $this->indyk = $indyk;
    }

    public function kwacz() {
        $this->indyk->gulgocz();
    }

    public function lataj() {
        for ($i = 0; $i < 5; $i++) {
            $this->indyk->lataj();
        }
    }
}