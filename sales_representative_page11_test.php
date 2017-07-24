

<!DOCTYPE html>
<!-- This is the page for information fetching used by admin/sales representative to get the information of client/user from DB_Table -->
<!-- For the code description please refer the file "kuldeep_registration_page.php" -->

<html>
<head>
    <meta name="kuldeep_singh" content="HTML, CSS, PHP">
    <link type = "text/css" rel = "stylesheet" href = "http:\\localhost:8080\\lead_form_original3.css"/>
    <title>This is the sales representative form 1</title>


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

// This is for the property_table 
 if(isset($_POST['fetch_data'])){
   $servername = "localhost";
    $username = "root";
    $password = "secret";
    $dbname = "project_testing";
   $db = new mysqli($servername, $username, $password, $dbname);  // This is objected oriented way of connecting with DB. 

  if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);   // Throw the last error code. 
    exit();
  }

  $id=$_POST['id'];
   $sqluname_retire1 = "SELECT * from property_table where id = '$id'";
   $sel_qry1=$db->query($sqluname_retire1);
   $fetch_data1=$sel_qry1->fetch_array(MYSQLI_ASSOC);  // Get the data in associative array "$fetch_array" and store it in "$fetch_data".
   
   }
   
   
   // This is for the customer_info_table 
   
    if(isset($_POST['fetch_data'])){
   $servername = "localhost";
    $username = "root";
    $password = "secret";
    $dbname = "project_testing";
   $db = new mysqli($servername, $username, $password, $dbname);  // This is objected oriented way of connecting with DB. 

  if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);   // Throw the last error code. 
    exit();
  }
		
   		$email = "";
		$email = $fetch_data1['Email'];
		
			  
		$sqluname_retire2 = "SELECT * from customer_info_table where Email = '$email'";
		$sel_qry2=$db->query($sqluname_retire2);
		$fetch_data2=$sel_qry2->fetch_array(MYSQLI_ASSOC);  // Get the data in associative array "$fetch_array" and store it in "$fetch_data".
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
		<!-- Here we are setting the value of the fields from the associative array "$fetch_array". -->
        <input class = "line" type="text" name="sale_or_rent" placeholder="Property Req. for" value = "<?php if(isset($fetch_data1['Property_Req_On'])!=NULL && $fetch_data1['Property_Req_On']!=''){echo $fetch_data1['Property_Req_On']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br>
        <br>
        <!--This field is for the type of property required-->
        <label for="state" class="names">Type of Property Required :</label>
        <input class = "line" type="text" name="proptype" placeholder="Type of Prop. Req." value = "<?php if(isset($fetch_data1['Type_Of_Property'])!=NULL && $fetch_data1['Type_Of_Property']!=''){echo $fetch_data1['Type_Of_Property']; }?>" readonly="readonly" style="text-align:left"/>

        <br>
        <br>
        <br>

        <label for="state" class="names">State:</label>
        <input class = "line" type="text" name="state" id="state" placeholder="State" value = "<?php if(isset($fetch_data1['Prefered_State'])!=NULL && $fetch_data1['Prefered_State']!=''){echo $fetch_data1['Prefered_State']; }?>" readonly="readonly" style="text-align:left"/>
        
        
        <label for="City" class="names"> City:</label>
        <input class = "line" type="text" name="City" id="City" placeholder="City" value = "<?php if(isset($fetch_data1['Prefered_City'])!=NULL && $fetch_data1['Prefered_City']!=''){echo $fetch_data1['Prefered_City']; }?>" readonly="readonly" style="text-align:left"/>
        
        
        <label for="Budget" class="names"> Budget:</label>
        <input class = "line" type="text" name="budget" id="budget" placeholder="Budget" value = "<?php if(isset($fetch_data1['Budget_In_INR'])!=NULL && $fetch_data1['Budget_In_INR']!=''){echo $fetch_data1['Budget_In_INR']; }?>" readonly="readonly" required="required" style="text-align:left"/>
        <br>
        

        <br><br><br>
        


        <h3>Personal Information</h3>
        <hr>
        <br>
        <label for="name" class="names"> Name:</label>
        <input class = "line" type="text" name="name" id="name" placeholder=" Name" value = "<?php if(isset($fetch_data2['Name'])!=NULL && $fetch_data2['Name']!=''){echo $fetch_data2['Name']; }?>" readonly="readonly" style="text-align:left"/>
        
        <!--<br><br>-->
        <label for="email" style="margin-left:20px;" class="names">Email:</label>
        <input class="line" type="email" name="email" id="email" placeholder="Enter Email" value = "<?php if(isset($fetch_data2['Email'])!=NULL && $fetch_data2['Email']!=''){echo $fetch_data2['Email']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br><br><br>
        <label for="country" class="names"> Country:</label>
        <input class = "line" type="text" name="country" id="country" placeholder="Country Name" value = "<?php if(isset($fetch_data2['Country'])!=NULL && $fetch_data2['Country']!=''){echo $fetch_data2['Country']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br><br><br>
        <label for="landline" class="names"> Landline No.:</label>
        <input class = "line" type="tel" name="landline" id="landline" placeholder="Landline No." value = "<?php if(isset($fetch_data2['Landline'])!=NULL && $fetch_data2['Landline']!=''){echo $fetch_data2['Landline']; }?>" readonly="readonly" style="text-align:left"/>
        

        <label for="mobile" style="margin-left:20px;" class="names"> Mobile No.:</label>
        <input class = "line" type="tel" name="mobile" id="mobile" placeholder="Mobile" value = "<?php if(isset($fetch_data2['Mobile'])!=NULL && $fetch_data2['Mobile']!=''){echo $fetch_data2['Mobile']; }?>" readonly="readonly" style="text-align:left"/>
        
        <br><br><br>
        <label for="address" class="names"> Address:</label>
        <input class = "line" type="text" name="address" id="address" placeholder="Address" value = "<?php if(isset($fetch_data2['Address'])!=NULL && $fetch_data2['Address']!=''){echo $fetch_data2['Address']; }?>" readonly="readonly" style="text-align:left; width:30%"/>
        
        <br><br><br>
        
        
    </form>

    <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <input type = "text" name="id" placeholder = "ID Required" style="height:23px;">
          <br><br>
		  <!-- This button will fetch the data with respect to the id passed in the field -->
          <div><input class="fetch" type ="submit" name="fetch_data" value="Fetch Data"/></div>
    </form>

	
     <br><br>
		<!--This link will forward us to other page for setting the status and stage for the property form-->	
         <a href="http:\\localhost:8080\\sales_representative_page2.php"><div><button class="proceed" type="button">Proceed</button></div></a>

    </div>
      </div>
</body>
</html>


