<?php
    class Player {

        private $name;
        private $power;
        private $lifepoint;
        private $idWeapon;
        

        public function __construct(){
            $this->power = 5;
            $this->lifepoint = 100;
        }

        
        public function getName(){ return $this->name; }
        public function getPower(){ return $this->power; }
        public function getLifePoint(){ return $this->lifepoint; }
        public function getIdWeapon(){ return $this->idWeapon; }

        public function setName($name){$this->name = $name; }
        public function setPower($power){$this->power = $power;}
        public function setLifePoint($lifepoint){$this->lifepoint = $lifepoint;}
        public function setIdWeapon($idWeapon){$this->idWeapon = $idWeapon;}

        public function __toString(){
            $weapon = Weapon::retrieveWeapon($this->idWeapon);
            $txt = "Name : ". $this->name . " <br/>";
            $txt .= "Power : ". $this->power . " <br/>";
            $txt .= "Life Point : ". $this->lifepoint . " <br/>";
            $txt .= "Arm : ". $this->idWeapon . " <br/>";
            $txt .= $weapon;

            return $txt;
        }
        
    }