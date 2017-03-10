<?php

abstract class Creator
{
    protected abstract function factoryMethod();

    public function startFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;  //返回一个产品（factoryMethod方法返回一个对象，通过Product接口）
    }
}

?>