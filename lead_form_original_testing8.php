

<!DOCTYPE html>
<!-- This is the information fetch form used by lead to get the information from CB_Table -->

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




<?php 
 if(isset($_POST['fetch_data'])){
   $servername = "localhost";
    $username = "root";
    $password = "secret";
    $dbname = "kuldeep_singh_db";
   $db = new mysqli($servername, $username, $password, $dbname);

  if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
  }

  $id=$_POST['id'];
   $sqluname_retire = "SELECT * from kuldeep_singh_table where id = '$id'";
   $sel_qry=$db->query($sqluname_retire);
   $fetch_data=$sel_qry->fetch_array(MYSQLI_ASSOC);
   }
?>





<div id="form" >

    
    <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
        
		<h2 class="heading">Sales Representative Window</h2>	
        <h3>Property Information</h3>
        <hr>
        <br>
        
        <!--This field is for whether we want the propperty for rent or sale-->
        <label for="state" class="names">Property Required for :</label>
        <input class = "line" type="text" name="sale_or_rent" placeholder="Property Req. for" value = "<?php if(isset($fetch_data['Property_Req_ON'])!=NULL && $fetch_data['Property_Req_ON']!=''){echo $fetch_data['Property_Req_ON']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br>
        <br>
        <!--This field is for the type of property required-->
        <label for="state" class="names">Type of Property Required :</label>
        <input class = "line" type="text" name="proptype" placeholder="Type of Prop. Req." value = "<?php if(isset($fetch_data['Type_of_Property'])!=NULL && $fetch_data['Type_of_Property']!=''){echo $fetch_data['Type_of_Property']; }?>" readonly="readonly" style="text-align:left"/>

        <br>
        <br>
        <br>

        <label for="state" class="names">State:</label>
        <input class = "line" type="text" name="state" id="state" placeholder="State" value = "<?php if(isset($fetch_data['Prefered_State'])!=NULL && $fetch_data['Prefered_State']!=''){echo $fetch_data['Prefered_State']; }?>" readonly="readonly" style="text-align:left"/>
        
        
        <label for="City" class="names"> City:</label>
        <input class = "line" type="text" name="City" id="City" placeholder="City" value = "<?php if(isset($fetch_data['Prefered_City'])!=NULL && $fetch_data['Prefered_City']!=''){echo $fetch_data['Prefered_City']; }?>" readonly="readonly" style="text-align:left"/>
        
        
        <label for="Budget" class="names"> Budget:</label>
        <input class = "line" type="text" name="budget" id="budget" placeholder="Budget" value = "<?php if(isset($fetch_data['Budget_in_INR'])!=NULL && $fetch_data['Budget_in_INR']!=''){echo $fetch_data['Budget_in_INR']; }?>" readonly="readonly" required="required" style="text-align:left"/>
        <br>
        

        <br><br><br>
        
        

        <h3>Personal Information</h3>
        <hr>
        <br>
        <label for="name" class="names"> Name:</label>
        <input class = "line" type="text" name="name" id="name" placeholder=" Name" value = "<?php if(isset($fetch_data['Name'])!=NULL && $fetch_data['Name']!=''){echo $fetch_data['Name']; }?>" readonly="readonly" style="text-align:left"/>
        
        <!--<br><br>-->
        <label for="email" class="names">Email:</label>
        <input class="line" type="email" name="email" id="email" placeholder="Enter Email" value = "<?php if(isset($fetch_data['Email'])!=NULL && $fetch_data['Email']!=''){echo $fetch_data['Email']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br><br><br>
        <label for="country" class="names"> Country:</label>
        <input class = "line" type="text" name="country" id="country" placeholder="Country Name" value = "<?php if(isset($fetch_data['Country'])!=NULL && $fetch_data['Country']!=''){echo $fetch_data['Country']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br><br><br>
        <label for="landline" class="names"> Landline No.:</label>
        <input class = "line" type="tel" name="landline" id="landline" placeholder="Landline No." value = "<?php if(isset($fetch_data['Landline'])!=NULL && $fetch_data['Landline']!=''){echo $fetch_data['Landline']; }?>" readonly="readonly" style="text-align:left"/>
        

        <label for="mobile" class="names"> Mobile No.:</label>
        <input class = "line" type="tel" name="mobile" id="mobile" placeholder="Mobile" value = "<?php if(isset($fetch_data['Mobile'])!=NULL && $fetch_data['Mobile']!=''){echo $fetch_data['Mobile']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br><br><br>
        <label for="address" class="names"> Address:</label>
        <input class = "line" type="text" name="address" id="address" placeholder="Address" value = "<?php if(isset($fetch_data['Address'])!=NULL && $fetch_data['Address']!=''){echo $fetch_data['Address']; }?>" readonly="readonly" style="text-align:left; width:30%"/>
        
        <br><br><br>
        
        
    </form>

    <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <input type = "text" name="id" placeholder = "ID Required" style="height:23px;">
          <br><br>
          <div><input class="fetch" type ="submit" name="fetch_data" value="Fetch Data"/></div>
    </form>

	
     <br><br>
		<!--This link will forward us to other page for setting the status and stage for the property form-->	
         <a href="http:\\localhost:8080\\lead_form_original_testing9.php"><div><button class="proceed" type="button">Proceed</button></div></a>

<!-- This is for  -->


    <?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if($_POST['fetch_data']){
   
  }else{
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

                        $sare = $proptype = $state =$city = $budget = $uname = $email = $country = $landn = $mob = $add = "";

                       // $_POST['uname'] will collect the data from field by reference.    
                        if(!empty($_POST['id']))
                        {
                           $id = test_input($_POST['id']);

                         }

                         


                          $sqluname = "SELECT Name from kuldeep_singh_table where id = $id";

                          $sqlemail = "SELECT Email from kuldeep_singh_table where id = $id";

                          $sqladd = "SELECT Address from kuldeep_singh_table where id = $id";

                          $sqlcountry = "SELECT Country from kuldeep_singh_table where id = $id";

                          $sqllandn = "SELECT Landline from kuldeep_singh_table where id = $id";

                          $sqlmob = "SELECT Mobile from kuldeep_singh_table where id = $id";

                          $sqlsare = "SELECT Property_Req_ON from kuldeep_singh_table where id = $id";

                          $sqlproptype = "SELECT Type_of_Property from kuldeep_singh_table where id = $id";

                          $sqlstate = "SELECT Prefered_State from kuldeep_singh_table where id = $id";

                          $sqlcity = "SELECT Prefered_City from kuldeep_singh_table where id = $id";

                          $sqlbudget = "SELECT Budget_in_INR from kuldeep_singh_table where id = $id";

                      
                    
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


