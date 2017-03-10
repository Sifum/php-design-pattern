<?php

class GetSet
{
    private $dataWareHouse;

    function __construct()
    {
        $this->setter(200);
        $got = $this -> getter();
        echo $got;
    }
    private function getter()
    {
        return $this -> dataWareHouse;
    }
    private function setter($setValue)
    {
        $this->dataWareHouse = $setValue;
    }
}

$worker = new GetSet();

?>