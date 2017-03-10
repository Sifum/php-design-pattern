<?php

class Context
{
    private $offState;
    private $onState;
    private $brighterState;
    private $brightestState;

    private $currentState;

    public function __construct()
    {
        $this->offState=new OffState($this);
        $this->onState=new OnState($this);
        $this->brighterState = new BrighterState($this);
        $this->brightestState = new BrightestState($this);

        $this->currentState=$this->offState;
    }
    public function turnOffLight()
    {
        $this->currentState->turnLightOff();
    }
    public function turnOnLight()
    {
        $this->currentState->turnLightOn();
    }
    public function turnBrighterLight()
    {
        $this->currentState->turnBrighter();
    }
    public function turnBrightestLight()
    {
        $this->currentState->turnBrightest();
    }
    public function setState(IState $state)
    {
        $this->currentState = $state;
    }
    public function getOnState()
    {
        return $this->onState;
    }
    public function getOffState()
    {
        return $this->offState;
    }
    public function getBrighterState()
    {
        return $this->brighterState;
    }
    public function getBrightestState()
    {
        return $this->brightestState;
    }
}

?>