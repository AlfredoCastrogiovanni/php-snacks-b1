<?php

    class Pokemon{
        public $name;
        public $genre;
        public $weight;
        public $height;
        public $level;
        public $category;

        public function __construct(String $name, String $genre, Float $weight, Float $height, Int $level, Category $category) {
            $this->name = $name;
            $this->genre = $genre;
            $this->weight = $weight;
            $this->height = $height;
            $this->level = $level;
            $this->category = $category;
        }

        public function getName() {
            echo $this->name;
        }

        public function getGenre() {
            echo $this->genre;
        }

        public function getWeight() {
            echo $this->weight;
        }
    }