<?php
include_once('NorthRegion.php');
include_once('WestRegion.php');

class Client
{
    public function __construct()
    {
        $north = new NorthRegion();
        $west = new WestRegion();
        $this -> showInterface($north);
        $this -> showInterface($west);
    }
    //IAbstract为类型提示
    private function showInterface(IAbstract $region)
    {
        //调用类型提示类中的方法
        echo $region->displayShow() . "<br/>";
    }
}

$worker = new Client();

?>