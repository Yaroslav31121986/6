<?php

require_once 'autoload.php';

//require_once "EmployeeInterface.php";
//require_once "ManagerInterface.php";
//require_once "Worker.php";
//require_once "Manager.php";
//require_once "echo_dump.php";

//создеам работников
$worker1 = new Worker('Иван', 'программист', '2015-01-01', 100);
$worker2 = new Worker('Петя', 'программист', '2015-01-01', 100);
$worker3 = new Worker('Дима', 'программист', '2015-01-01', 100);
$worker4 = new Worker('Антон', 'программист', '2015-01-01', 100);
$worker5 = new Worker('Сергей', 'программист', '2015-01-01', 100);
$worker6 = new Worker('Миша', 'программист', '2015-01-01', 100);

//создеам менеджеров
$manager1 = new Manager('Коля', 'менеджер', '2010-05-15', 100);
$manager2 = new Manager('Вася', 'менеджер', '2017-06-30', 100);

//передаем менеджеру работников
$manager1->addEmploye($worker1);
$manager1->addEmploye($worker2);
$manager1->addEmploye($worker3);
$manager2->addEmploye($worker4);
$manager2->addEmploye($worker5);
$manager2->addEmploye($worker6);


    $_GET["manager1"] = $manager1;//насколько я понял мы должны передать данные в $_GET массив а потом их оттуду вывести
    $_GET["manager2"] = $manager2;

    foreach ($_GET as $item) {

        echo "</br>";
        echo $item->position . " " . $item->name;
        echo "</br>";
        echo "Зарплата " . $item->salery;
        echo "</br>";
        echo "Дата принятия на работу " . $item->start_date;
        echo "</br>";
        echo "<p>";

        foreach ($item->getEmployees() as $work) {
            echo "</br>";
            echo $work->position . " " . $work->name;
            echo "</br>";
            echo "Зарплата " . $work->salery;
            echo "</br>";
            echo "Дата принятия на работу " . $work->start_date;
            echo "</br>";
        }

        echo "</p>";
        echo "<hr>";

    }


