<?php


abstract class Mototechnics implements iTransport
/*создали абстрактный класс мотомеханика, который реализовал интерфейс транспорт
здесь указал необходимие поля которые необходимо реализовать в наследующих классах и реализовал два метода интерфейса
которые в свою очередь обращаются к текущему объекту также создал абстрактные методы */
{
    private $model;
    private $number_of_wheels;
    private $max_speed;

    abstract public function move();
    abstract public function stop();
    abstract protected function getModel();
    abstract protected function getNumberOfWheels();
    abstract protected function getMaxSpeed();
}