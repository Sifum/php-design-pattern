<?php
include_once('UniversalConnect.php');
class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $this->tableMaster="proxyLog";
        $this->hookup=UniversalConnect::doConnect();
        $drop = "Drop TABLE IF EXISTS" . $this->tableMaster;
        if($this->hookup->query($drop) === true)
        {
            printf('Old table %s has been dropped.<br/>', $this->tableMaster);
        }
        $sql = "CREATE TABLE " . $this->tableMaster . " (uname varchar(15), pw varchar(120))";
        if($this->hookup->query($sql) === true)
        {
            echo "Table $this->tableMaster has been created successfully.<br/>";
        }
        $this->hookup->close();
    }
}

$worker = new CreateTable();
?>