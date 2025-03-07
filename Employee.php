<?php

abstract class Employee {
    protected $name;
    protected $id;
    protected $department;

    public function __construct($name, $id, $department) {
        $this->name = $name;
        $this->id = $id;
        $this->department = $department;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getDepartment() {
        return $this->department;
    }

    abstract public function calculateSalary();
}
