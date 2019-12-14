<?php


class Driver {
/*это класс водителя мотоцикла, метод take_transport принимает объект (скутераб мотоцикла или гидроцикла)
затем добавляет в объект имя и в поле transport добавляет весь объект и возвращает его. Метод move берет объект из поля
move и вызывает его собственный метод move который наследовался от мотомеханики*/
    public $name;
    private $transport;

    function __construct($name)
    {
        $this->name = $name;
    }

    function move(Mototechnics $mototechnics){
        $mototechnics->byname = $this->name;
		$mototechnics->move();
    }

    function stop(Mototechnics $mototechnics){
		$mototechnics->byname = $this->name;
		$mototechnics->stop();
    }

}