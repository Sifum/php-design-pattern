<?php
include_once('FruitStore.php');
include_once('CitrusStore.php');

class UseProducts
{
    public function __construct()
    {
        $appleSauce = new FruitStore();
        $orangesJuice = new CitrusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orangesJuice);
    }
    //类型提示：function doWork(TypeHint $someVar);TypeHint为IProduct接口
    function doInterface(IProduct $product)
    {
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();

?>