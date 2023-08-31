<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MiniSymulatorKaczki
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class MiniSymulatorKaczki {
    public static function execute() {
        $dzika = new DzikaKaczka();
        $dzika->wykonajKwacz();
        $dzika->wykonajLec();
        $model = new ModelKaczki();
        $model->wykonajLec();
        $model->ustawLatanieInterfejs(new LotZNapedemRakietowym());
        $model->wykonajLec();
    }
}
