<?php

    class Person {
        public $name;
        public $surname;
        public $age;

        function __construct(String $name, String $surname, Int $age) {
            $this->$name = $name;
            $this->$surname = $surname;
            $this->$age = $age;
        }

        public function setAge($age) : void {
            !is_int($age) ? throw new exception("Insert a integer") : $this->age = $age;
        }
    }

    $pippo = new Person('pippo','rossi', 20);

    try {
        $pippo->setAge(20);
        $pippo->setAge("giorgio");
    } catch(exception $e) {
        echo $e->getMessage();
    }