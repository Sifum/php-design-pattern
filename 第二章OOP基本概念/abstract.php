<?php

//继承抽象类的子类必须实现父类中的抽象方法
abstract class OneTrickAbstract
{
    public $storeHere;
    abstract public function trick($whatever);
}
//如果一个类至少有一个抽象方法，它必须是一个抽象类。

class OneTrickConcrete extends OneTrickAbstract
{
    public function trick($whatever)
    {
        $this->storeHere = "An abstrct property";
        return $whatever.$this->storeHere;
    }
}

$worker = new OneTrickConcrete();
echo $worker->trick('From an abstrct origin...');

?>