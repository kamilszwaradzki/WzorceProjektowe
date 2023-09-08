<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of GesAdapter
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

class GesAdapter extends Kwaczaca {
    public Ges $ges;
    public Obserwowany $obserwowany;

    public function __construct(Ges $ges) {
        $this->ges = $ges;
        $this->obserwowany = new Obserwowany($this);
    }

    public function kwacz(): void {
        $this->ges->gegaj();
        $this->powiadomObserwatorow();
    }

    public function powiadomObserwatorow(): void {
        $this->obserwowany->powiadomObserwatorow();
    }

    public function zarejstrujObserwatora(Obserwator $obserwator): void {
        $this->obserwowany->zarejstrujObserwatora($obserwator);
    }

    public function __toString() {
        return 'Gęś, która udaje, że jest kaczką';
    }
}