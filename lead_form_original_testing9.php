<!DOCTYPE html>

<html>
<head>
    <link type = "text/css" rel = "stylesheet" href = "http:\\localhost:8080\\lead_form_original3.css"/>
    <title>This is a Lead Form</title>


        <style>
            body
            {
                
                background-attachment: fixed;
            }
        </style>
</head>

<body background = "http:\\localhost:8080\\1634231.jpg">

    <div id="fullpage">  
        <!--<hr id="topline">-->
    
      <div id="TOP">
          <div class="menu"><a href="home.html">Home</a></div>
          <div class="menu"><a href="services.html">Services</a></div>
          <div class="menu"><a href="store.html">Store</a></div>
          <div class="menu"><a href="contacts.html">Contacts</a></div>
          <div class="menu"><a href="about.html">About</a></div>
 
    </div>

    <!--<h1 style="color:MediumSlateBlue">This is the lead form </h1> -->
    
<div id="navigation">


<ul>
  <li><a class="active" href="#abcd1">ABCD1</a></li>
  <li><a href="#abcd2">ABCD2</a></li>
  <li><a href="#abcd3">ABCD3</a></li>
  <li><a href="#abcd4">ABCD4</a></li>
<br><br>
    <hr>
    
    <h3 style>Video1</h3>
    <video width="300" controls>
            <source src="World of Warcraft - Trailer.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
    </video>
	
	
	<br><br>
	<h3 style>Video2</h3>
    <video width="300" controls>
            <source src="World of Warcraft - Trailer.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
    </video>

</ul>
    



      </div>

<div id="form" >

    
    <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
        
		<h2 class="heading">S.S.S. Window</h2>
        <h3>Property Information</h3>
        <hr>
        <br><br>
        <label style= "margin-left:30px" for="Id" class="names"> ID Req:</label>
        <input type = "text" name="id" placeholder = "ID Required"><br>

       
        <br><br>
        <!-- This field represents the different sales representatives -->
      <label for="salesrep" class="names" style = "margin-left:33px"> Sales Retresentative:</label>
      <select name="sales_rep" style="height:30px; border-radius:4px; width:130px; background-color:#ccccff; color:#5c5cd6; font-family:Times; font-size:20px">
            <option value="sales rep 1">sales rep 1</option>
            <option value="sales rep 2">sales rep 2</option>
            <option value="sales rep 3">sales rep 3</option>
            <option value="sales rep 4">sales rep 4</option>
            <option value="sales rep 5">sales rep 5</option>
            <option value="sales rep 6">sales rep 6</option>
      </select>

      	<br><br><br>
        
        <!--This field represents the status-->
      <label for="status" class="names" style = "margin-left:33px"> Status:</label>
      <select name="status" style="height:30px; border-radius:4px; width:90px; background-color:#ccccff; color:#5c5cd6; font-family:Times; font-size:20px">
            <option value="hot">hot</option>
            <option value="warm">warm</option>
            <option value="cold">cold</option>
            <option value="dead">dead</option>
      </select>
        
       
        <!--This field represents various stages of the process-->
      <label for="stages" class="names" style = "margin-left:33px"> Stage:</label>
      <select name="stages" style="height:30px; border-radius:4px; width:160px; background-color:#ccccff; color:#5c5cd6; font-family:Times; font-size:20px">
            <option value="generated">generated</option>
            <option value="quotation sent">quotation sent</option>
            <option value="negotiating">negotiating</option>
            <option value="quotation approved">quotation approved</option>
            <option value="not interested">not interested</option>
      </select>

      <br><br><br>
        <div ><input class="submit" type ="submit" value="Submit"/></div>
        
    </form>




       <?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
        error_reporting(E_ALL);

/* knowingly left the details below empty */
                $servername = "localhost";
                $username = "root";
                $password = "secret";
                $dbname = "kuldeep_singh_db";


                 // Create connection

                  $conn = mysqli_connect($servername, $username, $password, $dbname);

        
                // check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                        }


                        // This below function is for security purpose.
                        // This actually save the website from incoming malicious scripts
                function test_input($data) 
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                        }        


                       // We have define the above here only.
                       // If we will define it later then it will throw error.  

                       $id = $salesrep = $stages = $status = "";            



                       // $_POST['uname'] will collect the data from field by reference.    
                        if(!empty($_POST['id']))
                        {
                           $id = test_input($_POST['id']);

                         }

                         
                        
                       if(!empty($_POST['sales_rep']))
                       {
                          $salesrep = test_input($_POST['sales_rep']);
                        }



                        if(!empty($_POST['status']))
                       {
                          $status = test_input($_POST['status']);
                        }



                        if(!empty($_POST['stages']))
                       {
                          $stages = test_input($_POST['stages']);
                        }



           $sql = "UPDATE kuldeep_singh_table SET Sales_Representative = '$salesrep', Status = '$status', Stage = '$stages' WHERE id = '$id' ";
           // echo $sql;  
                    
                if (mysqli_query($conn, $sql)) 
                    {
                        echo "Status and stages have been updated ";
                        echo "Sales representative have been assigned ";
                    } 

                    else
                     {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);     

}
    ?>


    </div>
      </div>
</body>
</html>