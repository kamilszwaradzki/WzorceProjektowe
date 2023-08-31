<?php
require_once 'Rozdzial_Pierwszy/Interfejsy/LatanieInterfejs.php';
require_once 'Latanie.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of LatamBoMamSkrzydla
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class LatamBoMamSkrzydla extends Latanie implements LatanieInterfejs {
    function lec() {
        printf("%s<br/>", 'O rany! Latam!');
    }
}
