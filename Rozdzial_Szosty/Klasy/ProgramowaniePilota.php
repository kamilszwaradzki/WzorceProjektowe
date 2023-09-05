<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ProgramowaniePilota
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class ProgramowaniePilota {
    public static function execute() {
        $pilot = new SuperPilotZWycofywaniem();

        $swiatlo = new Swiatlo("Salon:");
        $tv = new TV("Salon:");
        $wiezaStereo = new WiezaStereo("Salon:");
        $jacuzzi = new Jacuzzi();

        $wlaczSwiatlo = new PolecenieWlaczSwiatlo($swiatlo);
        $wlaczWiezaStereo = new PolecenieWlaczWiezaStereo($wiezaStereo);
        $wlaczTV = new PolecenieWlaczTV($tv);
        $wlaczJacuzzi = new PolecenieWlaczJacuzzi($jacuzzi);
        $wlaczImpreze = [ $wlaczSwiatlo, $wlaczWiezaStereo, $wlaczTV, $wlaczJacuzzi ];
        $wylaczSwiatlo = new PolecenieWylaczSwiatlo($swiatlo);
        $wylaczWiezaStereo = new PolecenieWylaczWiezaStereo($wiezaStereo);
        $wylaczTV = new PolecenieWylaczTV($tv);
        $wylaczJacuzzi = new PolecenieWylaczJacuzzi($jacuzzi);
        $wylaczImpreze = [ $wylaczSwiatlo, $wylaczWiezaStereo, $wylaczTV, $wylaczJacuzzi ];

        $makroWlaczImpreze = new MakroPolecenie($wlaczImpreze);
        $makroWylaczImpreze = new MakroPolecenie($wylaczImpreze);

        $pilot->ustawPolecenie(0, $makroWlaczImpreze, $makroWylaczImpreze);

        printf("%s", $pilot);
        printf("<br/>--- Włączamy MakroPolecenie ---<br/>");
        $pilot->wcisnietoPrzyciskWlacz(0);
        printf("<br/>--- Wyłączamy MakroPolecenie ---<br/>");
        $pilot->wcisnietoPrzyciskWylacz(0);
    }
}
