<?php
require_once 'Rozdzial_Pierwszy/Interfejsy/KwakanieInterfejs.php';
require_once 'Kwakanie.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Piszcz
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class Piszcz extends Kwakanie implements KwakanieInterfejs {
    function kwacz() {
        printf("%s<br/>","Piszczę!");
    }
}
