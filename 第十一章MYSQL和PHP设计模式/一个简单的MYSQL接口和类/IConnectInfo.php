<?php

interface IConnectInfo
{
    const HOST="localhost";
    const UNAME="phpWorker";
    const PW="easyWay";
    const DBNAME="dpPatt";

    public function doConnect();
}

?>