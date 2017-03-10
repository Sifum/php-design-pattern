<?php
//__autoload()实现后，会在你实例化对象之前自动加载制定的文件。如：实例化MaleProto类，就会去加载MaleProto.php文件，所以文件名要与类名一样
function __autoload($class_name)
{
    $filename = $class_name.'.php';
    if(file_exists(filename)
    {
        include_once $filename;
    }else{
        echo $filename." is not existed";
    }
}

class Client
{
    private $fly1;
    private $fly2;
    private $c1Fly;
    private $c2Fly;
    private $updatedConeFly;
    public function __construct()
    {
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updatedConeFly = clone $this->fly2;
        $this->c1Fly->mated="true";
        $this->c2Fly->fecundity="186";
        $this->updatedConeFly->eyeColor="purple";
        $this->updatedConeFly->wingBeat="220";
        $this->updatedConeFly->unitEyes="750";
        $this->updatedConeFly->fecundity="92";
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedConeFly);
    }
    private function showFly(IPrototype $fly)
    {
        echo "Eye color: " . $fly->eyeColor . "<br/>";
        echo "Wing Beats/second: " . $fly->wingBeat . "<br/>";
        echo "Eye units: " . $fly->unitEyes . "<br/>";
        $genderNow = $fly::gender;
        echo "Gender: " . $genderNow . "<br/>";
        if($genderNow == "FEMALE")
        {
            echo "Number of eggs:" . $fly->fecundity;
        }
        else
        {
            echo "Mated: " . $fly->mated;
        }
    }
}

$worker = new Client();

?>