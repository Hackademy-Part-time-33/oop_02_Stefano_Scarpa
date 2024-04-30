<?php

// Traccia 1 - Utilizza i principi di OOP ed Ereditarietà per creare una struttura a classi 

class Continent {

    public $nameContinent;

    public function __construct($_continent){
        $this->nameContinent = $_continent; 
    }
      
};

class Country extends Continent{

    public $nameCountry;

    public function __construct($_continent,$_country){
        parent::__construct($_continent);
        $this->nameCountry = $_country; 
    }
};

class Region extends Country{

    public $nameRegion;

    public function __construct($_continent,$_country,$_region){
        parent::__construct($_continent,$_country);
        $this->nameRegion = $_region;
    }
};

class Province extends Region{

    public $nameProvince;

    public function __construct($_continent,$_country,$_region,$_province){
        parent::__construct($_continent,$_country,$_region);
        $this->nameProvince = $_province;
    }
};

class City extends Province{

    public $nameCity;

    public function __construct($_continent,$_country,$_region,$_province,$_city){
        parent::__construct($_continent,$_country,$_region,$_province);
        $this->nameCity = $_city;
    }
};

class Street extends City{

    public $nameStreet;

    public function __construct($_continent,$_country,$_region,$_province,$_city,$_street){
        parent::__construct($_continent,$_country,$_region,$_province,$_city);
        $this->nameStreet = $_street;
    }

    public function location(){
        echo "Mi trovo in {$this->nameContinent},{$this->nameCountry},{$this->nameRegion},{$this->nameProvince},{$this->nameCity},{$this->nameStreet} \n";
    }
};

$myLocation = new Street ("Europa","Italy","Puglia","Ba","Bari","Strada San Giorgio MArtire 2D");
$myLocation->location();

// Traccia 2 

class Vertebrates {

    public function __construct (){
        $this -> print("vertebrato");
    }
    protected function print($type){
        echo "sono un animale $type \n";
    }
}

class warmBlooded extends Vertebrates {
    public function __construct(){
        parent::__construct();
        $this -> type('sono un animale a sangue caldo');
    }
}

class coldBlooded extends Vertebrates {
    public function __construct(){
        parent::__construct();
        $this -> type('sono un animale a sangue freddo');
    }
}

class Mammals extends warmBlooded {
    public function __construct(){
        parent::__construct();
        $this -> type('mammifero');
    }
    protected function type ($type){
        echo "sono un $type \n";
    }
}

class Bird extends warmBlooded {
    public function __construct(){
        parent::__construct();
        $this -> type('uccello');
    }
    protected function type ($type){
        echo "sono un $type \n";
    }
}

class Fish extends coldBlooded {
    public function __construct(){
        parent::__construct();
        $this -> type('pesce');
    }
    protected function type ($type){
        echo "sono un $type \n";
    }
}

class Reptiles extends coldBlooded {
    public function __construct(){
        parent::__construct();
        $this -> type('rettile');
    }
    protected function type ($type){
        echo "sono un $type \n";
    }
}

class Anphibias extends coldBlooded {
    public function __construct(){
        parent::__construct();
        $this -> type('anfibio');
    }
    protected function type ($type){
        echo "sono un $type \n";
    }
}

$magicarp = new Fish();
$aquila = new Bird();

// Traccia 3 

class Car {
    protected $targa;
    private $num_telaio;

    public function __construct($targa, $num_telaio){
        $this -> targa = $targa;
        $this -> num_telaio = $num_telaio;
    }
    protected function telaio(){
        return $this->num_telaio;
    }
}
    
class Fiat extends Car {
    protected $nome;
    protected $license;
    protected $color;

    public function __construct($targa, $num_telaio, $nome, $color){
        parent::__construct($targa, $num_telaio);
        $this -> nome = $nome;
        $this -> color = $color;
        $this -> info();
    }

    private function info(){
        echo "L'auto è un {$this->nome} di colore {$this->color}, targata {$this->targa} con numero di telaio {$this->telaio()}";
    }
  }

  $car = new Fiat("ND 123 OJ", "54321", "Ford", "nera");