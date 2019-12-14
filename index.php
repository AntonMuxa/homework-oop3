<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
include('iTransport.php');
include('Mototechnics.php');
include('Scooter.php');
include('Motocycle.php');
include('Quadrocycle.php');
include('Driver.php');
*/

spl_autoload_register('autoloader');

function autoloader($className){
    include($className . ".php");
}

$skyscooter = new Scooter('Skybike Fest 80', '2', '80');
$sparkscooter = new Motocycle('Spark SP125S-14', '2', '180');
$sparkscooter2 = new Quadrocycle('Spark SP125S-15', '4', '85');
$sparkscooter3 = new Scooter('Spark SP125S-17', '2', '90');

$ivan = new Driver('Ivan');

$mototechs = [$skyscooter, $sparkscooter, $sparkscooter2, $sparkscooter3];

foreach ($mototechs as $moto)
    /* тут Принцип подстановки Барбары Лисков и Принцип инверсии зависимостей (Dependency Invertion)
    точнее не тут а в зависимостях обектов*/
{
    $ivan->move($moto);
    $ivan->stop($moto);
}

/*здесь создаются объекты дочерних классов мотомеханики и объект класса водитель затем циклом передается
в объект водитель каждый из мотоциклов сначала он ведет его потом останавливает
Single responsibility - соблюден каждый класс отвечает за отдельные обязанности
Open-closed - соблюден так как можно передать любой объект класса мотомеханика и все будет работать
а то что все реализовано интерфейсом легко разшряется

*/
