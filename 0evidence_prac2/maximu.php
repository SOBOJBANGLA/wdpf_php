    <?php
    
       $number = array(50,60,70,40,35);
       echo "<pre>";
       print_r($number);
        $max = $number[0];

        for($i = 1 ; $i <count($number);$i++){
            if($number[$i]> $max){
                $max = $number[$i];
            }
        }
        echo "<br>";
    echo "Maximum number-$max"."<br>";

    $number1 = array(50,60,70,40,35);
        $min = $number1[0];

        for($i = 1 ; $i <count($number1);$i++){
            if($number1[$i]< $min){
                $min = $number1[$i];
            }
        }
    echo "Minimum number- $min"."<br>";
    

    ?>

 