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