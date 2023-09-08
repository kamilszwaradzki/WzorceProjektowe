<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ProxyTest
 *
 * @source https://refactoring.guru/design-patterns/proxy/php/example#example-0
 */
spl_autoload_register(function ($class_menu) {
    require_once $class_menu . '.php';
});

class ProxyTest {
    public static function execute() {
        /**
        * The client code is supposed to work with all objects (both subjects and
        * proxies) via the Subject interface in order to support both real subjects and
        * proxies. In real life, however, clients mostly work with their real subjects
        * directly. In this case, to implement the pattern more easily, you can extend
        * your proxy from the real subject's class.
        */
        function clientCode(Subject $subject)
        {
            // ...

            $subject->request();

            // ...
        }

        echo "Client: Executing the client code with a real subject:<br/>";
        $realSubject = new RealSubject();
        clientCode($realSubject);

        echo "<br/>";

        echo "Client: Executing the same client code with a proxy:<br/>";
        $proxy = new Proxy($realSubject);
        clientCode($proxy);
    }
}
