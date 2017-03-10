<?php

//接口类似于抽象类，但不能在接口中定义变量，而可以定义常量，要在继承接口的类中访问接口的常量，使用“接口名::常量” 。
interface IConnectInfo 
//一般约定接口总以字母I开头
{
    const HOST = "localhost";
    const UNAME = "phpWorker";
    const DBNAME = "dpPatt";
    const PW = "easyWay";
    function testConnection();
}

class ConSQL implements IConnectInfo
{
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::UNAME;
    private $pass = IConnectInfo::PW;

    public function testConnection()
    {
        $hookup = new mysqli($this->server, $this->user, $this->pass, $this->currentDB);
        if(mysqli_connect_error())
        {
            die('bad mojo');
        }
        print "You're hooked up Ace! <br/>" . $hookup->host_info;
        $hookup -> close();
    }
}

$useConstant = new ConSQL();
$useConstant -> testConnection();


?>