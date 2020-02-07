<?php

class Worker implements EmployeeInterface{

public $name;
public $position;
public $salery;
public $start_date;
const PERCENT = 0.05;

    public function __construct(string $name, string $position, string $start_date, int $salery = 0)
    {
        $this->name = $name;//присваиваем имя сотруднику
        $this->position = $position;//присваиваем должность сотруднику
        $this->start_date = $start_date;//присваиваем дату принятия на работу сотрудника

        //вычисляем сколько лет проработал данный сотрудник
        $datetime1 = new DateTime($this->start_date);
        $datetime2 = new DateTime();
        $interval = $datetime1->diff($datetime2);
        $interval = $interval->format("%Y");

        //если сотрудник проработал больше 1 года начисляем ему надбавку  1г - 0%, 2г - 5%, 3г - 10%...
        if ($interval > 1) {

            $x = 0;
            $y = 1;
            $this->salery = $salery;//присваиваем ему ставку

            while ($x < $interval - 1) {

                $this->salery = $this->salery * ($y = $y + self::PERCENT);
                $this->salery = floor($this->salery);
                $x++;

            }
        }else{
            $this->salery = $salery;//если сотрудник проработал 1 год или меньше присваиваем ему ставку
        }

    }

    public function getName(){

        return $this->name;

    }

    public function getSalery(){

        return $this->salery;

    }

    public function getPosition(){

        return $this->position;

    }

    public function getStartDate(){

        return $this->start_date;

    }
}