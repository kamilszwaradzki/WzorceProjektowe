<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AutomatSprzedajacyTest
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class AutomatSprzedajacyTest {
    public static function exectue() {
        $automatSprzedajacy = new AutomatSprzedajacy(5);

        printf("%s<br/>", $automatSprzedajacy);

        $automatSprzedajacy->wlozMonete();
        $automatSprzedajacy->przekrecGalke();

        printf("%s<br/>", $automatSprzedajacy);

        $automatSprzedajacy->wlozMonete();
        $automatSprzedajacy->przekrecGalke();
        $automatSprzedajacy->wlozMonete();
        $automatSprzedajacy->przekrecGalke();

        printf("%s<br/>", $automatSprzedajacy);
    }
}
