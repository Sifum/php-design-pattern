<?php

interface ISpeed
{
    function fast();
    function cruise();
    function slow();
}

class Jet implements ISpeed
{
    function slow()
    {
        return 120;
    }
    function cruise()
    {
        return 1200;
    }
    function fast()
    {
        return 1500;
    }
}

class Cat implements ISpeed
{
    function slow()
    {
        $carSlow = 15;
        return $carSlow;
    }
    function cruise()
    {
        $carCruise = 65;
        return $carCruise;
    }
    function fast()
    {
        $carZoom = 110;
        return $carZoom;
    }
}

$f22 = new Jet();
$jetSlow = $f22->slow();
$jetCruise = $f22->cruise();
$jetFast = $f22->fast();

echo "----------------<br/>";

$ford = new Car();
$fordSlow = $ford->slow();
$fordCruise = $ford->cruise();
$fordFast = $ford->fast();

?>