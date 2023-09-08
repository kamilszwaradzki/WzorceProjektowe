<?php
require_once 'Rozdzial_Dwunasty/Interfejsy/KwaczacaInterfejs.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Kwaczaca
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

abstract class Kwaczaca extends KwakObserwowany implements KwaczacaInterfejs {
}