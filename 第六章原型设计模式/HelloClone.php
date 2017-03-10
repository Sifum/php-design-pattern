<?php

class HelloClone
{
    private $builtInConstructor;
    public function __construct()
    {
        echo "Hello, clone!<br/>";
        $this->builtInConstructor = "Constructor creation<br/>";
    }
    public function doWork()
    {
        echo $this->builtInConstructor;
        echo "I'm doing the work!";
    }
}

$original = new HelloClone();
$original->doWork();

$cloneIt = clone $original;
$cloneIt->doWork();

/*
输出中克隆后的$cloneIt，并没有启动输出构造函数中的信息。
说明：
克隆不会启动构造函数中的动作。克隆可以使用构造函数生成的默认赋值，但不会生成一个动作，如打印一条信息。
 */

?>