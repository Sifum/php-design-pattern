<?php
include_once('IAbstract.php');

class NorthRegion extends IAbstract
{
    protected function giveCost()
    {
        return 210.54;
    }
    protected function fiveCity()
    {
        return "Moose Breath";
    }
}

?>