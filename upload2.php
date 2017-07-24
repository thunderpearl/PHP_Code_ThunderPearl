

<?php

// Though it is better to make an external upload.php script where we will be sending the file, it will process other thing also.

/*=======================================================================================*/
// This whole code is working perfectly============||========||==========||===========

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name']; // It contains the original file name.
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name']; // It contains the randomly generated temporary file name.
      $file_type = $_FILES['image']['type'];
      // This end() will give us the end element of the array.
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){

          // First parameter is the file to be uploaded and second parameter is the location at which it is to be uploaded.
         move_uploaded_file($file_tmp,"php_image_uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>

      <form action= "<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>

   </body>
</html>
1
