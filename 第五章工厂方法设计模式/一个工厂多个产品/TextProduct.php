<?php
include_once('FormatHelper.php');
include_once('Product.php');

class kyProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    public function getProperties()
    {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct.="
        <img src='abc.png' class='abc' width='600' height='304' />
        <header>Kry</header>
        <p>This is a text</p>
        ";
        $this->mfgProduct.=$this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}

?>