<?php
class Manager extends Worker implements ManagerInterface {

    public $employe = [];

    public function getEmployees(){

        return $this->employe;

    }

    public function addEmploye(EmployeeInterface $employe){

        $this->employe[] = $employe;
        $this->salery += $this->salery * 0.02;
        $this->salery = floor($this->salery);

    }

    public function  getCountEmployees(){

        return count($this->employe);

    }

}