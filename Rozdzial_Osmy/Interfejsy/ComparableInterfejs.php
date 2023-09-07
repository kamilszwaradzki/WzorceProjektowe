<?php
require_once 'Rozdzial_Osmy/Klasy/Kaczka.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
interface ComparableInterfejs {
    public static function compareTo(Kaczka $taKaczka, Kaczka $object);
}
