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
        <input class = "line" type="text" name="state" id="state" placeholder="State" value = "$name" required="required" style="text-align:left"/>
        
        
        <label for="City" class="names"> City:</label>
        <input class = "line" type="text" name="City" id="City" placeholder="City" value = "$sqlcity" required="required" style="text-align:left"/>
        
        
        <label for="Budget" class="names"> Budget:</label>
        <input class = "line" type="text" name="budget" id="budget" placeholder="Budget" value = "$sqlbudget" required="required" style="text-align:left"/>
        <br>
        

        <br><br><br>
        
        

        <h3>Personal Information</h3>
        <hr>
        <br>
        <label for="name" class="names"> Name:</label>
        <input class = "line" type="text" name="name" id="name" placeholder=" Name" value = "$sqluname" required="required" style="text-align:left"/>
        
        <!--<br><br>-->
        <label for="email" class="names">Email:</label>
        <input class="line" type="email" name="email" id="email" placeholder="Enter Email" value = "$sqlemail" required="required" style="text-align:left"/>
        
        <br><br><br>
        <label for="country" class="names"> Country:</label>
        <input class = "line" type="text" name="country" id="country" placeholder="Country Name" value = "$sqlcountry" required="required" style="text-align:left"/>
        
        <br><br><br>
        <label for="landline" class="names"> Landline No.:</label>
        <input class = "line" type="tel" name="landline" id="landline" placeholder="Landline No." value = "$sqllandn" required="required" style="text-align:left"/>
        

        <label for="mobile" class="names"> Mobile No.:</label>
        <input class = "line" type="tel" name="mobile" id="mobile" placeholder="Mobile" value = "$sqlmob" required="required" style="text-align:left"/>
        
        <br><br><br>
        <label for="address" class="names"> Address:</label>
        <input class = "line" type="text" name="address" id="address" placeholder="Address" value = "$sqladd" required="required" style="text-align:left; width:30%"/>
        
        <br><br><br>
        
        
    </form>

    <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <input type = "text" name="id" placeholder = "ID Required">
          <div  class="submit"><input  type ="submit" value="Fetch Data"/></div>
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

                       $id = $sqlsare = $sqlproptype = $sqlstate = $sqlcity = $sqlbudget  = $sqluname = $sqlemail = $sqlcountry = $sqllandn = $sqlmob = $sqladd = "";            

                        $sare = $proptype = $state = $city = $budget = $uname = $email = $country = $landn = $mob = $add = "";

                       // $_POST['uname'] will collect the data from field by reference.    
                        if(!empty($_POST['id']))
                        {
                           $id = test_input($_POST['id']);

                         }

                         


                          $sqluname = "SELECT Name from kuldeep_singh_leadform_table where id = $id";

                          $sqlemail = "SELECT Email from kuldeep_singh_leadform_table where id = $id";

                          $sqladd = "SELECT Address from kuldeep_singh_leadform_table where id = $id";

                          $sqlcountry = "SELECT Country from kuldeep_singh_leadform_table where id = $id";

                          $sqllandn = "SELECT Landline from kuldeep_singh_leadform_table where id = $id";

                          $sqlmob = "SELECT Mobile from kuldeep_singh_leadform_table where id = $id";

                          $sqlsare = "SELECT Property_Req_ON from kuldeep_singh_leadform_table where id = $id";

                          $sqlproptype = "SELECT Type_of_Property from kuldeep_singh_leadform_table where id = $id";

                          $sqlstate = "SELECT Prefered_State from kuldeep_singh_leadform_table where id = $id";

                          $sqlcity = "SELECT Prefered_City from kuldeep_singh_leadform_table where id = $id";

                          $sqlbudget = "SELECT Budget_in_INR from kuldeep_singh_leadform_table where id = $id";

                      
                    
                      $name =  mysqli_query($conn, $sqluname);
                      
                      $email = mysqli_query($conn, $sqlemail);

                      $add = mysqli_query($conn, $sqladd);

                      $country = mysqli_query($conn, $sqlcountry);

                      $landn = mysqli_query($conn, $sqllandn);

                      $mob = mysqli_query($conn, $sqlmob);

                      $sare = mysqli_query($conn, $sqlsare);

                      $proptype = mysqli_query($conn, $sqlproptype);

                      $state = mysqli_query($conn, $sqlstate);

                      $city = mysqli_query($conn, $sqlcity);

                      $budget = mysqli_query($conn, $sqlbudget); 

                      print $name;

                    mysqli_close($conn);     

}
    ?>




                <!--<script>
                        function makeReadOnly()
                        {

                          $('email').attr('readonly', true);
                        }

                </script> */-->



    </div>
      </div>
</body>
</html>


