<?php
   class Books {
      /* Member variables */
      // But now its use is bepricated in php 5. So, there is not mucj use of it.
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }

      $obj1 = new Books();
      $obj1.setPrice(34);
      $obj1.getPrice();
   }
echo "fhfjgkhk";
?>