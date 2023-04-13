<?php
class Hero{
    /**
     * access modifier oop pada php ada 3:
     * 1. public
     * 2. private
     * 3. protected
     */

     // attribute / property
     public $nama;
     public $health;
     public $demage;
     public $level = 1;

     // construct adalah method yang jalan otomatis saat objek dibuat
     public function __construct($nama, $health, $demage){
     $this->nama = $nama;
     $this->health = $health;
     $this->demage = $demage;
     }

     // method
     public function getInfo()
     {
        echo "<hr>Nama: " . $this->nama;
        echo "<br>HP: " . $this->health;
        echo "<br>Demage: " . $this->demage;
        echo "<br>Level: " . $this->level;
     }
     // method untuk naik 1 level
     public function levelup(){
        $this->level = $this->level + 1;
     }

     // method untuk menyerang 
     public function attack($target){
        $target->health = $target->health - $this->demage;
     }
}

// membuat object / instansiasi
$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);

$hero1->levelup();

$hero1->attack($hero2);

$hero1->getInfo();
$hero2->getInfo();