<?php
include_once('FormatHelper.php');
include_once('Product.php');

class MoldoveProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;
    public function getProperties()
    {
        $this->countryNow = file_get_contents("Moldova.txt");
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct=$this->formatHelper->addTop();
        $this->mfgProduct.="<img src='Moldova.png' class='pixRight' width='208' height='450' />";
        $this->mfgProduct.="<header>Moldova</header>";
        $this->mfgProduct.="<p>$this->countryNow</p>";
        $this->mfgProduct.=$this->formatHelper->closeUp();
        return $this->mfgProduct; 
    }
}

?>