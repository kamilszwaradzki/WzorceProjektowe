<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        spl_autoload_register(function ($class_name) {
//            include './Rozdzial_Pierwszy/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Drugi/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Trzeci/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Czwarty/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Piaty/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Szosty/Klasy/' . $class_name . '.php';
            include './Rozdzial_Siodmy/Klasy/' . $class_name . '.php';
        });
//        MiniSymulatorKaczki::execute();
//        StacjaMeteo::execute()
//        StarCafe::execute();
//        PizzaTest::execute();
//        SingletonTest::execute();
//        MiniPilotTest::execute();
//        ProgramowaniePilota::execute();
//        TestowanieKaczki::execute();
        FasadaKinaDomowegoTest::execute();
        ?>
    </body>
</html>
