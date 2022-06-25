<?php
class  Vehicle
{
    public $plate;
    public $brand;
    public $model;
    public $wheels;
    public $wing;


    // Methods
    function set_plate($plate)
    {
        $this->plate = $plate;
    }
    function get_plate()
    {
        return $this->plate;
    }

    function set_brand($brand)
    {
        $this->brand = $brand;
    }
    function get_brand()
    {
        return $this->brand;
    }

    function set_model($model)
    {
        $this->model = $model;
    }
    function get_model()
    {
        return $this->model;
    }

    function set_wheels($wheels)
    {
        $this->wheels = $wheels;
    }
    function get_wheels()
    {
        return $this->wheels;
    }

    function set_wing($wing)
    {
        $this->wing = $wing;
    }
    function get_wing()
    {
        return $this->wing;
    }
}


class Car extends Vehicle
{


    public function index()
    {
        parent::set_plate('06 ARAC 06');
        parent::set_brand('Mercedes');
        parent::set_model('C180');
        parent::set_wheels('4');
        echo "--------Car---------- " . '<br>';
        echo 'Plaka No: ' .  parent::get_plate() . '<br>';
        echo 'Marka: ' .  parent::get_brand() . '<br>';
        echo 'Model: ' .  parent::get_model() . '<br>';
        echo 'Tekerlek Sayısı:  ' .  parent::get_wheels() . '<br>';
        echo "--------Car----------" . '<br> <br> <br>';
    }
}



class Motorcycle extends Vehicle
{
    public function index()
    {
        parent::set_plate('06 ARAC 06');
        parent::set_brand('Honda');
        parent::set_model('Forza 750');
        parent::set_wheels('2');
        echo "--------Motorcycle---------- " . '<br>';
        echo 'Plaka No: ' .  parent::get_plate() . '<br>';
        echo 'Marka: ' .  parent::get_brand() . '<br>';
        echo 'Model: ' .  parent::get_model() . '<br>';
        echo 'Tekerlek Sayısı:  ' .  parent::get_wheels() . '<br>';
        echo "--------Motorcycle----------" . '<br> <br> <br>';
    }
}

class Airplane extends Vehicle
{
    public function index()
    {
        parent::set_brand('Airbus');
        parent::set_model('A380');
        parent::set_wheels('80m');
        echo "--------Airplane---------- " . '<br>';
        echo 'Marka: ' .  parent::get_brand() . '<br>';
        echo 'Model: ' .  parent::get_model() . '<br>';
        echo 'Kanat Açıklığı:  ' .  parent::get_wheels() . '<br>';
        echo "--------Airplane----------" . '<br> <br> <br>';
    }
}


$car = new Car();
$car->index();

$motorcycle = new Motorcycle();
$motorcycle->index();

$airplane = new Airplane();
$airplane->index();
