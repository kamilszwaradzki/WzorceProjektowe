<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of WentylatorSufitowy
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class WentylatorSufitowy {
    public static int $SZYBKO = 3;
    public static int $SREDNIO = 2;
    public static int $WOLNO = 1;
    public static int $WYLACZ = 0;
    public string $lokalizacja;
    public int $predkosc;

    public function __construct(string $lokalizacja) {
        $this->lokalizacja = $lokalizacja;
        $this->predkosc = self::$WYLACZ;
    }

    public function wysokieObroty() {
        $this->predkosc = self::$SZYBKO;
        printf("%s wentylator sufitowy włączony, wysokie obroty <br/>", $this->lokalizacja);
    }

    public function srednieObroty() {
        $this->predkosc = self::$SREDNIO;
        printf("%s wentylator sufitowy włączony, średnie obroty <br/>", $this->lokalizacja);
    }

    public function niskieObroty() {
        $this->predkosc = self::$WOLNO;
        printf("%s wentylator sufitowy włączony, niskie obroty <br/>", $this->lokalizacja);
    }

    public function wylacz() {
        $this->predkosc = self::$WYLACZ;
        printf("%s wentylator sufitowy wyłączony <br/>", $this->lokalizacja);
    }

    public function pobierzPredkosc() {
        return $this->predkosc;
    }
}
