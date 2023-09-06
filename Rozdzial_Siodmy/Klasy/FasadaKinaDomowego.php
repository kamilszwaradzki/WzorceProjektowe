<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FasadaKinaDomowego
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class FasadaKinaDomowego {
    public Wzmacniacz $wzmacniacz;
    public Tuner $tuner;
    public OdtwarzaczDVD $dvd;
    public OdtwarzaczCD $cd;
    public Projektor $projektor;
    public OswietlenieKinowe $oswietlenie;
    public Ekran $ekran;
    public MaszynkaPopcorn $popcorn;
    
    public function __construct(Wzmacniacz $wzmacniacz,
                    Tuner $tuner,
                    OdtwarzaczDVD $dvd,
                    OdtwarzaczCD $cd,
                    Projektor $projektor,
                    Ekran $ekran,
                    OswietlenieKinowe $oswietlenie,
                    MaszynkaPopcorn $popcorn) {
        $this->wzmacniacz = $wzmacniacz;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projektor = $projektor;
        $this->ekran = $ekran;
        $this->oswietlenie = $oswietlenie;
        $this->popcorn = $popcorn;
    }

    public function odtwarzanieFilmu(string $film) {
        printf("---- Przygotuj sie na seans filmowy...<br/>");
        $this->popcorn->wlacz();
        $this->popcorn->przygotujPopcorn();
        $this->oswietlenie->sciemniaj(10);
        $this->ekran->wDol();
        $this->projektor->wlacz();
        $this->projektor->trybSzerokoekranowy();
        $this->wzmacniacz->wlacz();
        $this->wzmacniacz->ustawDvd($this->dvd);
        $this->wzmacniacz->ustawDzwiekPrzestrzenny();
        $this->wzmacniacz->ustawGlosnosc(5);
        $this->dvd->wlacz();
        $this->dvd->odtwarzaj($film);
    }

    public function koniecFilmu() {
        printf("<br/>---- Koniec seansu, wyłączam kino domowe...<br/>");
        $this->popcorn->wylacz();
        $this->oswietlenie->wlacz();
        $this->ekran->wGore();
        $this->projektor->wylacz();
        $this->wzmacniacz->wylacz();
        $this->dvd->zatrzymaj();
        $this->dvd->wysunDysk();
        $this->dvd->wylacz();
    }
}
