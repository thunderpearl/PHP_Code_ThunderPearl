<!DOCTYPE html>
<html>
<body>

<?php
    
    class hello
    {
        public $x=3;
        public $y;
        
        
    }
    
    $obj1 = new hello();
    
    $obj1->y=8;
    
    // We have to access this way only, bcoz we want to access something that is withi the scope of class
    print $obj1->x ."<br>";
    print $obj1->y ;
    
  ?>  

</body>
</html>