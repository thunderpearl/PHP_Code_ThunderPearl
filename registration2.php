

<!DOCTYPE html>
<!-- This is first form where user will be submitting his/her data :D :D :D -->
<!-- This is original file -->
<html>
<head>
	<meta name="kuldeep_singh" content="HTML, CSS, PHP">
    <link type = "text/css" rel = "stylesheet" href = "http:\\localhost:8080\\lead_form_original3.css"/>
    <title>This is the registration form</title>


        <style>
            body
            {
                
                background-attachment: fixed;
            }
        </style>
</head>

<body background = "http:\\localhost:8080\\1634231.jpg">

<!-- This is full page division here -->
    <div id="fullpage">  
        
    <!-- This is the top menu bar of the page. -->
      <div id="TOP">
          <div class="menu"><a href="home.html">Home</a></div>
          <div class="menu"><a href="services.html">Services</a></div>
          <div class="menu"><a href="store.html">Store</a></div>
          <div class="menu"><a href="contacts.html">Contacts</a></div>
          <div class="menu"><a href="about.html">About</a></div>
 
    </div>

	<!-- We actually can navigate to other place of the website though are not linked with any page -->
<div id="navigation">


<ul>
  <li><a class="active" href="#abcd1">ABCD1</a></li>
  <li><a href="#abcd2">ABCD2</a></li>
  <li><a href="#abcd3">ABCD3</a></li>
  <li><a href="#abcd4">ABCD4</a></li>
<br><br>
    <hr>
    
	<!-- Here we can have videos of various properties or services from the company's side -->
	<h3 style>Video1</h3>
    <video width="300" controls>
            <source src="World of Warcraft - Trailer.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
    </video>
	
	
	<!-- Here we can have videos of various properties or services from the company's side -->
	<br><br>
	<h3 style>Video2</h3>
    <video width="300" controls>
            <source src="World of Warcraft - Trailer.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
    </video>

</ul>
    
      </div>

	  <!-- This is the division for the form -->
<div id="form" >

    <!-- "htmlspecialchars" is used for avoiding exploits from the malicious scripts-->
    <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
        
		<h2 class="heading">Registration Window</h2>
        <h3>Property Information</h3>
        <hr>
        <br><br>
		
        <!--This field is for whether we want the property for rent or sale-->
    	<label for="propreq" class="names"> Property Required for :</label>
        <select name="sale_or_rent" style="height:30px; border-radius:4px; background-color:#ccccff; color:#5c5cd6; font-family:Times; font-size:20px">
            <option value="Sale">Sale</option>
            <option value="Rent">Rent</option>
        </select>
        
        <br>
        <br>
		
        <!--This field is for the type of property required-->
      <label for="proptype" class="names"> Type of Property Required:</label>
      <select name="proptype" style="height:30px; border-radius:4px; background-color:#ccccff; color:#5c5cd6;font-family:Times; font-size:20px" >
            <option value="Multistory Apartment">Multistory Apartment</option>
            <option value="Residential House">Residential House</option>
            <option value="Villa">Villa</option>
            <option value="Commercial Office">Commercial Office</option>
            <option value="Office in IT Park">Office in IT Park</option>
            <option value="SEZ">SEZ</option>
      </select>

        <br>
        <br>
        <br>

		<!-- Field for state -->
        <label for="state" class="names">State:</label>
        <input class = "line" type="text" maxlength = "20" name="state" id="state" placeholder="State" value = "<?php if(isset($_POST['state'])){ echo htmlentities($_POST['state']); } ?>" required="required" style="text-align:left"/>
        
        <!-- Field for city -->
        <label for="City" class="names"> City:</label>
        <input class = "line" type="text" maxlength = "20" name="City" id="City" placeholder="City" value = "<?php if(isset($_POST['City'])){ echo htmlentities($_POST['City']); } ?>" required="required" style="text-align:left"/>
        
        <!-- Field for budget -->
        <label for="Budget" class="names"> Budget:</label>
        <input class = "line" type="text" maxlength = "10" name="budget" id="budget" placeholder="Budget" value = "<?php if(isset($_POST['budget'])){ echo htmlentities($_POST['budget']); } ?>" required="required" style="text-align:left"/>
        <br>
        

        <br><br><br>
        
        
		<!-- Here uer will enter his/her personal information -->
        <h3>Personal Information</h3>
        <hr>
        <br>
		
		<!-- Field for name -->
        <label for="name" class="names"> Name:</label> <!--  -->
        <input class = "line" type="text" maxlength = "30" name="name" id="name" placeholder=" Name" value = "<?php if(isset($_POST['name'])){ echo htmlentities($_POST['name']); } ?>" required="required" style="text-align:left"/>
        
        <!-- Field for email -->
        <label style= "margin-left:20px" for="email" class="names">Email:</label>
        <input class="line" type="email" maxlength = "40" name="email" id="email" placeholder="Enter Email" value = "<?php if(isset($_POST['email'])){ echo htmlentities($_POST['email']); } ?>" required="required" style="text-align:left"/>
        
        <br><br><br>
		<!-- Field for country -->
        <label for="country" class="names"> Country:</label>
        <input class = "line" type="text" maxlength = "16" name="country" id="country" placeholder="Country Name" value = "<?php if(isset($_POST['country'])){ echo htmlentities($_POST['country']); } ?>" required="required" style="text-align:left"/>
        
        <br><br><br>
		<!-- Field for landline number -->
        <label for="landline" class="names"> Landline No.:</label>
        <input class = "line" type="tel" maxlength = "12" name="landline" id="landline" placeholder="Landline No." value = "<?php if(isset($_POST['landline'])){ echo htmlentities($_POST['landline']); } ?>" required="required" style="text-align:left"/>
        
		<!-- Field for mobile number -->
        <label style= "margin-left:20px" for="mobile" class="names"> Mobile No.:</label>
        <input class = "line" type="tel" maxlength = "13" name="mobile" id="mobile" placeholder="Mobile" value = "<?php if(isset($_POST['mobile'])){ echo htmlentities($_POST['mobile']); } ?>" required="required" style="text-align:left"/>
        
        <br><br><br>
		<!-- Field for Address -->
        <label for="address" class="names"> Address:</label>
        <input class = "line" type="text" maxlength = "100" name="address" id="address" placeholder="Address" value = "<?php if(isset($_POST['address'])){ echo htmlentities($_POST['address']); } ?>" required="required" style="text-align:left; width:30%"/>
        
        <br><br><br>
		<!-- By pressing the submit button we wil be submitting the form -->
        <div><input class="submit" type ="submit" value="Submit"/></div>
        
    </form>
	

<!-- This is the php code which will deal with all the entered data of the client/user -->
<!-- Here it will check if the post method is been used in the form above. -->

<?php include 'registrationinc.php'; ?>
<!--Experiment successful. That above php file is used in this php file which is placed outside of this current file :D :D :D-->

    </div>
      </div>
</body>
</html>


