<?php
function __autoload($class_name)
{
    include_once($class_name.'.php');
}

//客户类
class Client
{
    function __construct()
    {
        $caption = "Modigliani painted elongated faces.";
        $mo = new ConcreteClass();
        $mo -> templateMethod("modig.png", $caption);
    }
}

$worker = new Client();
?>