<?php
    class Weapon {

        private static $increment = 1;
        private static $weapons = [];

        private $id;
        private $name;
        private $harm;
       
        public function __construct($name, $harm,){
            $this->id = self::$increment;
            self::$increment++;
            $this->name = $name;
            $this->harm = $harm;
            self::$weapons[] = $this;
            
        }

        public function getId(){ return $this->id; }
        public function getName(){ return $this->name; }
        public function getHarm(){ return $this->harm; }

        public function setName($name){$this->name = $name; }
        public function setHarm($harm){$this->harm = $harm;}

        public function __toString(){
            $txt = "ID : ". $this->id . " <br/>";
            $txt .= "Name : ". $this->name . " <br/>";
            $txt .= "Harm : ". $this->harm . " <br/>";

            return $txt;
        }

        public static function retrieveWeapon($id){
            foreach(self::$weapons as $weapon){
                if($id == $weapon->id){
                    return $weapon;
                }
            }
        }
    }