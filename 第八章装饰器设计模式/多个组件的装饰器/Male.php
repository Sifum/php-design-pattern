<?php

class Male extends IComponent
{
    public function __construct()
    {
        $this->data="Male";
        $this->setFeature("<br/>Dude programmer feature: ");
    }
    public function getAge()
    {
        return $this->ageGroup;
    }
    public function setAge($ageNow)
    {
        $this->ageGroup=$ageNow;
    }
    public function getFeature()
    {
        return $this->feature;
    }
    public function setFeature($fea)
    {
        $this->feature=$fea;
    }
}

?>