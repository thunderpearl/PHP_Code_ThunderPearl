

<html>

   <head>
      <title>Reading a file using PHP</title>
   </head>
   
   <body>
      
      <?php

      // This php code is for reading the file.
         $filename = "C:\Javapractice\helloworld.java";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>
      
   </body>
</html>