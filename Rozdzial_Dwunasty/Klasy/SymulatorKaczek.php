<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SymulatorKaczek
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class SymulatorKaczek {
    public static function execute() {
        $symulator = new SymulatorKaczek();
        $kaczkaFabryka = new FabrykaKaczekZLicznikiem();

        $symulator->uruchom($kaczkaFabryka);
    }

    public function uruchom(AbstrakcyjnaFabrykaKaczek $kaczkaFabryka = null, Kwaczaca $kaczka = null) {
        if ($kaczka === null) {
            $plaskonosKaczka = $kaczkaFabryka->utworzPlaskonosKaczka();
            $wabikKaczka = $kaczkaFabryka->utworzWabikKaczka();
            $gumowaKaczka = $kaczkaFabryka->utworzGumowaKaczka();
            $gesKaczka = new GesAdapter(new Ges());

            printf("<br/>Symulator Kaczek: ze wzorcem Kompozyt - stada<br/>");

            $stadoKaczek = new Stado();

            $stadoKaczek->dodaj($plaskonosKaczka);
            $stadoKaczek->dodaj($wabikKaczka);
            $stadoKaczek->dodaj($gumowaKaczka);
            $stadoKaczek->dodaj($gesKaczka);

            $stadoDzikichKaczek = new Stado();

            $dzikaKaczkaJeden = $kaczkaFabryka->utworzDzikaKaczka();
            $dzikaKaczkaDwa = $kaczkaFabryka->utworzDzikaKaczka();
            $dzikaKaczkaTrzy = $kaczkaFabryka->utworzDzikaKaczka();
            $dzikaKaczkaCztery = $kaczkaFabryka->utworzDzikaKaczka();

            $stadoDzikichKaczek->dodaj($dzikaKaczkaJeden);
            $stadoDzikichKaczek->dodaj($dzikaKaczkaDwa);
            $stadoDzikichKaczek->dodaj($dzikaKaczkaTrzy);
            $stadoDzikichKaczek->dodaj($dzikaKaczkaCztery);

            $stadoKaczek->dodaj($stadoDzikichKaczek);

            printf("<br/>Symulator Kaczek: Symulacja całego stada<br/>");
            $this->uruchom(null, $stadoKaczek);

            printf("<br/>Symulator Kaczek: Symulacja stada dzikich kaczek<br/>");
            $this->uruchom(null, $stadoDzikichKaczek);

            printf("<br/>Symulator Kaczek: Z wzorcem Obserwator<br/>");
            $kwakolog = new Kwakolog();
            $stadoKaczek->zarejstrujObserwatora($kwakolog);

            $this->uruchom(null, $stadoKaczek);

            printf("Kaczki kwaknęły %d razy<br/>", KwakLicznik::pobierzLiczbaKwakniec());
        } else {
            $kaczka->kwacz();
        }
    }
}