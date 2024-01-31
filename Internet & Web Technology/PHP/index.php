<!--PhP in HTML-->
<html> 
    <body>
        <h1>PHP Test</h1>
        <?php 
        echo '<p>Hello World</p>';
        //Decision Making 
        $num = 12;
        if($num > 10){
            echo "$num is greater than 10";}
        else{
            echo "$num is less than 10";
        }
        //Loops
        for($i = 0; $i < 10; $i++){
            echo "Hello World";
        }
        while($j < 10){
            echo "Hello World";
            $j++;
        }

        do{
            echo "Hello World";
        $k++;}
        while($k < 10);
        
        //Arrays

        $arr = array(1,2,3,4,5);  //$arr2 = [1,2,3,4,5]; 
                   //0,1,2,3,4 index
        echo $arr[2];
        echo "<pre>"; //pre tag is used to print the array in a line
        print_r($arr);  //print_r() prints the blueprint of array
        echo "</pre>"; //pre tag is used to print the array in a line
       
        //HTML commands being used in below code
        echo "<ul>";
       for($i = 0; $i < $i<=5; $i++){
           echo $arr[$i] . <br>;   // dot is used to concatenate
       }
       echo "</ul>";

       

       // Functions

       function add($a,$b){
        $sum = $a + $b;
        return $sum;
       }
         echo add(2,3); //Outputs 5
       ?>
        </body>
        </html>