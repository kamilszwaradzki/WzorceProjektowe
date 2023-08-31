<?php
require_once 'Latanie.php';
require_once 'Rozdzial_Pierwszy/Interfejsy/LatanieInterfejs.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of LotZNapedemRakietowym
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
class LotZNapedemRakietowym extends Latanie implements LatanieInterfejs {
    public function lec() {
        printf("%s<br/>", 'Uuuuaaa! Lot z napędem rakietowym!');
    }
}
