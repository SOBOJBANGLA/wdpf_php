<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<h1>Ans no - 3</h1>
<h3>Product List</h3>
    <?php
    if(isset($_POST['submit'])){
        $product = $_POST['pdt'];
        $obj = new Produc('pd.txt');
        $obj->show($product);
    }

    class Produc{
        public $datas;

        public function __construct($x){
            $this->datas = file($x);
        }

        public function show($pd){
            foreach($this->datas as $data){
                $line = explode("|",$data);
                list($search,$id,$name,$price)=$line;
                if($search==$pd){
                    echo "Product No-$search<br>Product ID-$id<br>Product Name-$name<br>Product Price-$price";
                }
            }

        }




    }

    ?>

    <form action="" method="post">
        <select name="pdt" >
            <option value="">Select one</option>
            <option value="1">Lux</option>
            <option value="2">Wheel</option>
            <option value="3">Chaka</option>
            <option value="4">Meril</option>

        </select><br>
        <input type="submit" value="submit" name="submit">


    </form>
</body>
</html>