<!DOCTYPE html>
<html>
<head>
    <link type = "text/css" rel = "stylesheet" href = "http:\\localhost:8080\\lead_form_original.css"/>
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
    
    <br>
    <video width="300" controls>
            <source src="World of Warcraft - Trailer.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
    </video>

</ul>
    



      </div>

<div id="form" >

    
    <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
        

        <h3>Property Information</h3>
        <hr>
        
        <!--This field is for whether we want the propperty for rent or sale-->
    	<label for="propreq" class="names"> Property Required for :</label>
        <select class="drop" id="sare" name="sale or rent" style="height:25px">
            <option value="prop">Sale</option>
            <option value="prop">Rent</option>
        </select>
        
        <br>
        <br>
        <!--This field is for the type of property required-->
      <label for="proptype" class="names"> Type of Property Required:</label>
      <select class ="drop" id="proptype" name="proptype" >
        <option value="prop">Multistory Apartment</option>
        <option value="prop">Residential house</option>
        <option value="prop">Villa</option>
        <option value="prop">Commercial Office</option>
        <option value="prop">Office in IT Park</option>
        <option value="prop">SEZ</option>
      </select>

        <br>
        <br>
        <br>

        <label for="state" class="names">State:</label>
        <input class = "line" type="text" name="state" id="state" placeholder="State" required="required" style="text-align:left"/>
        
        
        <label for="City" class="names"> City:</label>
        <input class = "line" type="text" name="City" id="City" placeholder="City" required="required" style="text-align:left"/>
        
        
        <label for="Budget" class="names"> Budget:</label>
        <input class = "line" type="text" name="budget" id="budget" placeholder="Budget" required="required" style="text-align:left"/>
        <br>
        

        <br><br><br>
        
        

        <h3>Personal Information</h3>
        <hr>
        <br>
        <label for="name" class="names"> Name:</label>
        <input class = "line" type="text" name="name" id="name" placeholder=" Name" required="required" style="text-align:left"/>
        
        <!--<br><br>-->
        <label for="email" class="names">Email:</label>
        <input class="line" type="email" name="email" id="email" placeholder="Enter Email" required="required" style="text-align:left"/>
        
        <br><br><br>
        <label for="country" class="names"> Country:</label>
        <input class = "line" type="text" name="country" id="country" placeholder="Country Name" required="required" style="text-align:left"/>
        
        <br><br><br>
        <label for="landline" class="names"> Landline No.:</label>
        <input class = "line" type="tel" name="landline" id="landline" placeholder="Landline No." required="required" style="text-align:left"/>
        

        <label for="mobile" class="names"> Mobile No.:</label>
        <input class = "line" type="tel" name="mobile" id="mobile" placeholder="Mobile" required="required" style="text-align:left"/>
        
        <br><br><br>
        <label for="address" class="names"> Address:</label>
        <input class = "line" type="text" name="address" id="address" placeholder="Address" required="required" style="text-align:left; width:30%"/>
        
        <br><br><br>
        <div  class="submit"><input  type ="submit" value="Submit"/></div>
        
    </form>


    <?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
        error_reporting(E_ALL);


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


                function test_input($data) 
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                        }        


                       // We have define the above here only.
                       // If we will define it later then it will throw error.  

                       $sare = $proptype = $state = $city = $budget  = $uname = $email = $country = $landn = $mob = $add = "";            



                       // $_POST['uname'] will collect the data from field by reference.    
                        if(!empty($_POST['sale or rent']))
                        {
                           $sare = test_input($_POST['sale or rent']);

                         }

                         
                        
                       if(!empty($_POST['proptype']))
                       {
                          $proptype = test_input($_POST['proptype']);
                        }

                       

                        if(!empty($_POST['state']))
                        {
                           $state = test_input($_POST['state']);
                         }
                         

                       if(!empty($_POST['city']))
                           $city = test_input($_POST['city']);
                        


                       if(!empty($_POST['budget']))
                           $budget = test_input($_POST['budget']);
                         


                        if(!empty($_POST['name']))
                           $uname = test_input($_POST['name']);
                         


                        if(!empty($_POST['email']))
                            $email = test_input($_POST['email']);

                        

                        if(!empty($_POST['country']))
                            $country = test_input($_POST['country']);

                        


                        if(!empty($_POST['landline']))
                            $landn = test_input($_POST['landline']);



                        if(!empty($_POST['mobile']))
                            $mob = test_input($_POST['mobile']);



                        if(!empty($_POST['address']))
                            $add = test_input($_POST['address']);


            $sql="INSERT INTO `kuldeep_singh_leadform_table`(`Property_Req_ON`, `Type_of_Property`, `Prefered_State`, `Prefered_City`, `Budget_in_INR`, `Name`,`Email`, `Country`, `Landline`, `Mobile`, `Address`) 
                    VALUES ('$sare','$proptype', '$state', '$city', '$budget', `$uname`, `$email`, `$country`, '$landn', `$mob`, '$add')";
                      
                    
                if (mysqli_query($conn, $sql)) 
                    {
                        echo "New record created successfully";
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


