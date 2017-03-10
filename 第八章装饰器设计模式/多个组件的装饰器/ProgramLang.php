<?php
//具体包装器
class ProgramLang extends Decorator
{
    private $languageNow;

    public function __construct(IComponent $dataNow)
    {
        $this->data=$dataNow;
    }
    private $language=array("php"=>"PHP","cs"=>"C#","js"=>"Javascript","as3"=>"ActionScript 3.0");
    public function setFeature($lan)
    {
        $this->languageNow=$this->language[$lan];
    }
    public function getFeature()
    {
        $output = $this->data->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;";
        $output .= "$fmat preferred programming language: ";
        $output .= $this->languageNow;
        return $output;
    }
}

?>