<?php

abstract class CloneMe
{
    public $name;
    public $picture;
    abstract function __clone();
}

class Person extends CloneMe
{
    public function __construct()
    {
        $this->picture="cloneMan.png";
        $this->name="Original";
    }
    public  function display()
    {
        echo "<p><img src='$this->picture' />";
        echo "<br/>$this->name</p>";
    }

    function __clone(){}
}

$worker = new Person();
$worker->display();

//__clone方法不能直接访问，必须通过：$anotherInstance = clone $someInstance
$slacker = clone $worker;
//复制对象后，可以修改对象的属性
$slacker->name = "Cloned";
$slacker->display();

?>