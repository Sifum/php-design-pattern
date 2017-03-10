<?php

abstract class IAbstract
{
    protected $valueNow;
    //继承此类必须实现以下方法，因displayShow方法中调用了返回，所以必须有返回。
    abstract protected function giveCost();
    abstract protected function giveCity();

    public function displayShow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogether = ("Cost:$" . $stringCost ." for " . $this->giveCity());
        return $allTogether;
    }
}

?>