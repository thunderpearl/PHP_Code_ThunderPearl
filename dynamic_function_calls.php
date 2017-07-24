


<html>

   <head>
      <title>Dynamic Function Calls</title>
   </head>

   <body>

      <?php
      // This is good example of dynamic function calling.
         function sayHello() {
            echo "Hello<br />";
         }


         // This way we are assigning it another name and this is called as 
         // dynamic calling.
         $function_holder = "sayHello";
         $function_holder();
      ?>

   </body>
</html>
