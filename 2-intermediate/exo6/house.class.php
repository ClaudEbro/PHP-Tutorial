<?php

    class House {

        private static $increment = 1;

        private $id;
        private $dateOfCreation;
        private $room;
        private $surface;

        public function __construct($dateOfCreation, $room, $surface){
            $this->id = self::$increment;
            self::$increment++;
            $this->dateOfCreation = $dateOfCreation;
            $this->room = $room;
            $this->surface = $surface;
        }

        public function getId(){ return $this->id; }
        public function getDateOfCreation(){ return $this->dateOfCreation; }
        public function getRoom(){ return $this->room; }
        public function getSurface(){ return $this->surface; }
    }