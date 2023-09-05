<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MiniPilotTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class MiniPilotTest {

    public static function execute() {
        $pilot = new MiniPilot();
        $swiatlo = new Swiatlo();
        $wlaczSwiatlo = new PolecenieWlaczSwiatlo($swiatlo);

        $pilot->ustawPolecenie($wlaczSwiatlo);
        $pilot->przyciskZostalNacisniety();
    }
}
