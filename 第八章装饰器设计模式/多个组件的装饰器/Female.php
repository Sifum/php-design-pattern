<?php

class Female extends IComponent
{
    public function __construct()
    {
        $this->data="Female";
        $this->setFeature("<br/>Grrrl programmer feature: ");
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