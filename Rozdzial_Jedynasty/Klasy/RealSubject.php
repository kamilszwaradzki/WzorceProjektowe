<?php
require_once 'Rozdzial_Jedynasty/Interfejsy/Subject.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * The RealSubject contains some core business logic. Usually, RealSubjects are
 * capable of doing some useful work which may also be very slow or sensitive -
 * e.g. correcting input data. A Proxy can solve these issues without any
 * changes to the RealSubject's code.
 *
 * @source https://refactoring.guru/design-patterns/proxy/php/example#example-0
 */
class RealSubject implements Subject {
    public function request(): void
    {
        echo "RealSubject: Handling request.<br/>";
    }
}
