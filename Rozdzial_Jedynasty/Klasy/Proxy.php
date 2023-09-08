<?php
require_once 'Rozdzial_Jedynasty/Interfejsy/Subject.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * The Proxy has an interface identical to the RealSubject.
 * @source https://refactoring.guru/design-patterns/proxy/php/example#example-0
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class Proxy implements Subject
{
    /**
     * @var RealSubject
     */
    private $realSubject;

    /**
     * The Proxy maintains a reference to an object of the RealSubject class. It
     * can be either lazy-loaded or passed to the Proxy by the client.
     */
    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    /**
     * The most common applications of the Proxy pattern are lazy loading,
     * caching, controlling the access, logging, etc. A Proxy can perform one of
     * these things and then, depending on the result, pass the execution to the
     * same method in a linked RealSubject object.
     */
    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    private function checkAccess(): bool
    {
        // Some real checks should go here.
        echo "Proxy: Checking access prior to firing a real request.<br/>";

        return true;
    }

    private function logAccess(): void
    {
        echo "Proxy: Logging the time of request.\n";
    }
}
