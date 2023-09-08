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
//            include './Rozdzial_Siodmy/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Osmy/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Dziewiaty/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Dziesiaty/Klasy/' . $class_name . '.php';
//            include './Rozdzial_Jedynasty/Klasy/' . $class_name . '.php';
            include './Rozdzial_Dwunasty/Klasy/' . $class_name . '.php';
        });
//        MiniSymulatorKaczki::execute();
//        StacjaMeteo::execute()
//        StarCafe::execute();
//        PizzaTest::execute();
//        SingletonTest::execute();
//        MiniPilotTest::execute();
//        ProgramowaniePilota::execute();
//        TestowanieKaczki::execute();
//        FasadaKinaDomowegoTest::execute();
//        NapojeJazdaProbna::execute();
//        TestSortowanieKaczek::execute();
//        MenuTest::execute();
//        KMenuTest::execute();
//        AutomatSprzedajacyTest::exectue();
//        ProxyTest::execute();
        SymulatorKaczek::execute();
        ?>
<!--
        <br/>
        <form method="POST" action="index.php">
            <label for='chce_dodatki_her'>Czy życzy Pan sobie dodania cytryny do herbaty?</label><br/>
            <input type="radio" id="tak" name="chce_dodatki_her" value="Tak"/>
            <label for="tak">Tak</label><br>
            <input type="radio" id="nie" name="chce_dodatki_her" value="Nie"/>
            <label for="nie">Nie</label><br>
            <label for='chce_dodatki_kaw'>Czy życzy Pan sobie dodania cukru i mleka do kawy?</label><br/>
            <input type="radio" id="tak" name="chce_dodatki_kaw" value="Tak"/>
            <label for="tak">Tak</label><br>
            <input type="radio" id="nie" name="chce_dodatki_kaw" value="Nie"/>
            <label for="nie">Nie</label><br>
            <input type="submit" name='wyslij' value='Wyślij odpowiedź' />
        </form>-->
    </body>
</html>