<?php

//包含组件方法的装饰器
abstract class Decorator extends IComponent 
{
    public function setAge($ageNow)
    {
        $this->ageGroup=$this->ageGroup;
    }
    public function getAge()
    {
        return $this->ageGroup;
    }
}

?>