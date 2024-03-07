
<?php


//! Traccia 1
// class Continent
// {
//     public $nameContinent;

//     public function __construct($continent)
//     {
//         $this->nameContinent = $continent;
//     }
// }

// class Country extends Continent
// {
//     public $nameCountry;

//     public function __construct($continent, $country)
//     {
//         parent::__construct($continent);
//         $this->nameCountry = $country;
//     }
// }

// class Region extends Country
// {
//     public $nameRegion;

//     public function __construct($continent, $country, $region)
//     {
//         parent::__construct($continent, $country);
//         $this->nameRegion = $region;
//     }
// }

// class Province extends Region
// {
//     public $nameProvince;

//     public function __construct($continent, $country, $region, $province)
//     {
//         parent::__construct($continent, $country, $region);
//         $this->nameProvince = $province;
//     }
// }

// class City extends Province
// {
//     public $nameCity;

//     public function __construct($continent, $country, $region, $province, $city)
//     {
//         parent::__construct($continent, $country, $region, $province);
//         $this->nameCity = $city;
//     }
// }

// class Street extends City
// {
//     public $nameStreet;

//     public function __construct($continent, $country, $region, $province, $city, $street)
//     {
//         parent::__construct($continent, $country, $region, $province, $city);
//         $this->nameStreet = $street;
//     }

//     public function getMyCurrentLocation()
//     {
//         return "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
//     }
// }


// $myLocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");


// echo $myLocation->getMyCurrentLocation();










//! Traccia 2

// class Animal
// {
//     public function __construct()
//     {
//     }
// }

// class Vertebrate extends Animal
// {
//     protected function printSpecialization()
//     {
//         echo "Sono un animale Vertebrato\n";
//     }
// }

// class ColdBlooded extends Animal
// {
//     protected function printSpecialization()
//     {
//         echo "Sono un animale a Sangue Freddo\n";
//     }
// }

// class WarmBlooded extends Animal
// {
//     protected function printSpecialization()
//     {
//         echo "Sono un animale a Sangue Caldo\n";
//     }
// }

// class Fish extends Vertebrate
// {
//     public function __construct()
//     {
//         parent::__construct();
//         $this->printSpecialization();
//         echo "Sono un animale a Sangue Freddo\n";
//         $this->swim();
//     }

//     protected function swim()
//     {
//         echo "Splash!\n";
//     }
// }

// $magikarp = new Fish();












//! Traccia 3

class Car {
    private $num_telaio;

    public function __construct($num_telaio) {
        $this->num_telaio = $num_telaio;
    }

    public function getNumTelaio() {
        return $this->num_telaio;
    }
}

class Fiat extends Car {
    protected $name;
    protected $license;
   

    public function __construct($num_telaio, $license, $name) {
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->name = $name;
    }

    public function printCarDetails() {
        echo "La mia macchina e' $this->name, con targa $this->license e numero di Telaio " . $this->getNumTelaio() . "\n";
    }
}

class Porsche extends Car {
    protected $name;
    protected $license;
   

    public function __construct($num_telaio, $license, $name) {
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->name = $name;
    }

    public function printCarDetails() {
        echo "La mia auto è una Porsche, con targa $this->license e numero di telaio " . $this->getNumTelaio() . "\n";
    }
}


$fiat = new Fiat("1234", "ND 123 OJ", "Fiat");
$fiat->printCarDetails();


$porsche = new Porsche("5678", "DG 966 PK", "Porsche");
$porsche->printCarDetails();


var_dump($fiat);
var_dump($porsche);

