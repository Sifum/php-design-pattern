<?php
include_once('Product.php');

class TextProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct = <<<MALI
        <!doctype html>
        <html><head>
        <meta charset="UTF-8">
        <title>MALI</title>
        <style type="text/css">
        header{
            color:#900;
            font-weight:bold;
            font-size:24px;
            font-family:Verdana, Geneva, sans-serif;
        }
        p{
            font-size:15px;
        }
        </style>
        </head>
        <body>
        <header>Mali</header>
        <p>this is text</p>
        </body>
        </html>
        MALI;
        return $this->mfgProduct;
    }
}

?>