<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PolecenieWentylatorSufitowySzybko
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class PolecenieWentylatorSufitowySzybko extends Polecenie {
    public WentylatorSufitowy $wentylatorSufitowy;
    public int $poprzedniaPredkosc;

    public function __construct(WentylatorSufitowy $wentylatorSufitowy) {
        $this->wentylatorSufitowy = $wentylatorSufitowy;
    }

    public function wykonaj() {
        $this->poprzedniaPredkosc = $this->wentylatorSufitowy->pobierzPredkosc();
        $this->wentylatorSufitowy->wysokieObroty();
    }

    public function wycofaj() {
        if ($this->poprzedniaPredkosc == WentylatorSufitowy::$SZYBKO) {
            $this->wentylatorSufitowy->wysokieObroty();
        } elseif ($this->poprzedniaPredkosc == WentylatorSufitowy::$SREDNIO) {
            $this->wentylatorSufitowy->srednieObroty();
        } elseif ($this->poprzedniaPredkosc == WentylatorSufitowy::$WOLNO) {
            $this->wentylatorSufitowy->niskieObroty();
        } elseif ($this->poprzedniaPredkosc == WentylatorSufitowy::$WYLACZ) {
            $this->wentylatorSufitowy->wylacz();
        }
    }

    public function __toString() {
        return self::class;
    }
}
