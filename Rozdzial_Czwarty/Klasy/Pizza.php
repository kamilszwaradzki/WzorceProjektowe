<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pizza
 *
 * @author Kamil Szwaradzki <kamil.szwaradzki at your.org>
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

abstract class Pizza {
    public string $nazwa;
    public Ciasto $ciasto;
    public Sos $sos;
    public array $warzywa;
    public Ser $ser;
    public Pepperoni $pepperoni;
    public Malze $malze;

    abstract function przygotowanie();

    function pieczenie() {
        printf("Pieczenie: 25 minut w temperaturze 180 stopni Celsjusza<br/>");
    }

    function krojenie() {
        printf("Krojenie pizzy na 8 kawałków<br/>");
    }

    function pakowanie() {
        printf("Pakowanie pizzy w oficjalne pudełko naszej sieci Pizzerii.<br/>");
    }

    public function pobierzNazwa() {
        return $this->nazwa;
    }

    public function ustawNazwa(string $nazwa) {
        $this->nazwa = $nazwa;
    }

    public function __toString()
    {
        $wynik = "";
        $wynik .= sprintf("---- %s ----<br/>", $this->nazwa);
        if (isset($this->ciasto)) { $wynik .= sprintf("%s<br/>", $this->ciasto); }
        if (isset($this->sos)) { $wynik .= sprintf("%s<br/>", $this->sos); }
        if (isset($this->ser)) { $wynik .= sprintf("%s<br/>", $this->ser); }
        if (isset($this->warzywa)) {
            for ($i = 0; $i < count($this->warzywa); $i++) {
                $wynik .= sprintf("%s", $this->warzywa[$i]);
                if ($i < count($this->warzywa)-1) { $wynik .= sprintf(", "); }
            }
            $wynik .= sprintf("<br/>");
        }
        if (isset($this->malze)) { $wynik .= sprintf("%s<br/>", $this->malze); }
        if (isset($this->pepperoni)) { $wynik .= sprintf("%s<br/>", $this->pepperoni); }
        return $wynik;
    }
}
