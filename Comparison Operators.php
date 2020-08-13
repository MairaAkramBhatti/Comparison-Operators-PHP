<html>
<body>
    <?php

    echo"<h2>Comparsion Operators <h2><br>";

 //Equla ==

    $a = 5;
    $b = 10;
    
 echo "First value is ".$a."<br>";
 echo "Second value is ".$b."<br>";
 echo "Both are not Equal<br>";
    var_dump($a == $b);
    echo "<br><br>" ;

    //indentical 
    
    $x = 5;
    $y = "10";
    
    echo "First value is ".$x."<br>";
    echo "Second value is ".$y."<br>";
    echo "type differance <br>";
       var_dump($x === $y); 
     echo "<br><br>" ;

       //not equal 

       $a = 5 ;
       $b = 10 ;

       echo "First value is ".$a."<br>";
       echo "Second value is ".$b."<br>";
       echo "First value is not equal second value <br>";

       var_dump($a != $b); 
       echo "<br><br>" ;
       //Not identical

       $x = 5;
       $y = "10";

       echo "First value is ".$x."<br>";
       echo "Second value is ".$y."<br>";
       echo "First value is not equal second value <br>";

       var_dump($x !== $y);
       echo "<br><br>" ;

       //Greater Than 

       $a = 10 ;
       $b = 5;

       echo "First value is ".$a."<br>";
       echo "Second value is ".$b."<br>";
       echo "First value greater than second value <br>";
       
       var_dump ($a > $b);
       echo "<br><br>" ;

       //less Than

       $x = 10; ;
       $y = 5;

       echo "First value is ".$x."<br>";
       echo "Second value is ".$y."<br>";
       echo "Second value less than First value <br>";

       var_dump($x < $y );
       echo "<br><br>" ;

       //Greater Than or equal

       $x = 10; ;
       $y = 5;

       echo "First value is ".$x."<br>";
       echo "Second value is ".$y."<br>";
       echo "First is greater than or equal to Second <br>";

       var_dump($x >= $y );
       echo "<br><br>" ;

       //less Tan or Equal

       $x = 10; ;
       $y = 5;

       echo "First value is ".$x."<br>";
       echo "Second value is ".$y."<br>";
       echo "First is less than or equal to Second <br>";

       var_dump($x <= $y );
       echo "<br><br>" ;

       //Spaceship 
       //this Operator Like Scale Weighing 
      
       $x = 1; 
       $y = 5;

       echo "First value is ".$x."<br>";
       echo "Second value is ".$y."<br>";
       echo "First value is less than second value <br>";
       echo ($x <=> $y); 
       echo "<br>";
       
       $x = 5; 
       $y = 5;

       echo "First value is ".$x."<br>";
       echo "Second value is ".$y."<br>";
       echo "First and second value same <br>";
       echo ($x <=> $y); 
       echo "<br>";

       $x = 10; 
       $y = 5;

       echo "First value is ".$x."<br>";
       echo "Second value is ".$y."<br>";
       echo "First value is greater than second value <br>";
       echo ($x <=> $y); 

    ?>

</body>
</html>