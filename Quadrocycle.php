<?php


class Quadrocycle extends Mototechnics
    /*здесь класс наследник мотомеханики*/
{
    private $model;
    private $max_speed;
    private $number_of_wheels;
    function __construct($model, $number_of_wheels, $max_speed)
    {
        $this->model = $model;
        $this->number_of_wheels = $number_of_wheels;
        $this->max_speed = $max_speed;
    }
    
    public function getModel(){
        return $this->model;
    }
    public function getNumberOfWheels(){
        return $this->number_of_wheels;
    }
    public function getMaxSpeed(){
        return $this->max_speed;
    }
	
	public function move() {
		echo "This " .strtolower(get_class($this)). " " . $this->getModel() . " moving by " . $this->byname . " this max speed " . $this->getMaxSpeed() . " on " . $this->getNumberOfWheels() . ' wheels <br>';
	}
	
	public function stop(){
        echo "This " .strtolower(get_class($this)). " " . $this->getModel() . " stop moving by " . $this->byname . '<br>';
    }
}