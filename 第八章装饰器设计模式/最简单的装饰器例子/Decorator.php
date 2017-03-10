<?php
//这个一个抽象类，而且它扩展了另一个抽象类。这个类的作用就是维护组件接口。
abstract class Decorator extends IComponent
{
    //继承getSite()h和getPrice()
    //这仍是一个抽象类
    //这里不需要实现任何一个抽象方法
    //任务时维护Component的引用
    //public function getSite(){}
    //public function getPrice(){}
}
?>