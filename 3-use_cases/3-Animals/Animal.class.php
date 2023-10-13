<?php

class Animal {

    private $id;
    private $name;
    private $age;
    private $sex;
    private $type;
    private $images = [];

    public static $myanimals = [];

    public function __construct($id, $name, $age, $sex, $type, $images){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->type = $type;
        $this->images = $images;
        self::$myanimals[] = $this;
    }

    public function getId(){return $this->id;}
    public function getName(){return $this->name;}
    public function getAge(){return $this->age;}
    public function getSex(){return $this->sex;}
    public function getType(){return $this->type;}
    public function getImages(){return $this->images;}

    public function setID($id){$this->id = $id;}
    public function setName($name){$this->name = $name;}
    public function setAge($age){$this->age = $age;}
    public function setSex($sex){$this->sex = $sex;}
    public function setType($type){$this->type = $type;}
    public function setImages($images){$this->images = $images;}
}