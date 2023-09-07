<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PancakeHouseMenuIterator
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class PancakeHouseMenuIterator extends WPIterator {
    public array $elementy;
    public int $pozycja = 0;

    public function __construct(array $elementy) {
        $this->elementy = $elementy;
    }

    public function next() {
        $pozycjaMenu = $this->elementy[$this->pozycja];
        $this->pozycja = $this->pozycja + 1;
        return $pozycjaMenu;
    }

    public function hasNext() {
        if ($this->pozycja >= count($this->elementy) || !isset($this->elementy)) {
            return false;
        } else {
            return true;
        }
    }
}