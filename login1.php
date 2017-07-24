

<!Doctype HTML>
<!--This is the form made using twitter bootstrap-->
<!--This form is used for registration of an account-->
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	</head>

	<body>
		<br>
		
		<form class = "well span6">
			
			<h4>Login</h4>
			<br>
			
			<label>Email</label>
			<!--"span3" is size of text which will be 3 column wide-->
			<input type="email" class="span3" name = "email" placeholder="Email" required="required" /><br/>
			

			
			<label>Password</label>
			<input type="password" class="span3" name = "pass" placeholder="Password" required="required" /><br/>
			
			<button class="btn btn-primary">Submit</button> <!--This will give us a good vlue button-->
		
		</form>
		
		
		<?php
			
			// "$_SERVER" is an array containing the header, path and script location.
			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
					error_reporting(E_ALL);


							$servername = "localhost";       // this is the server's name
							$username = "root";              // username of the server, by default it is "root"
							$password = "secret";            // Password for accessing the mysql 
							$dbname = "db_registration";    // name of the database 


							 // Create connection with the database.
							  $conn1 = mysqli_connect($servername, $username, $password, $dbname);
							  
							  
							 
						// this is the condition to check the connectionis established or not.
						if (!$conn1) {
							die("Connection failed: " . mysqli_connect_error());
								}

						// this function is very important to avoid the exploits done by malicious script.	
						function test_input($data) 
						{
							$data = trim($data); // removes whitespace from both the sides
							$data = stripslashes($data); //
							$data = htmlspecialchars($data); // convert all non html entities to html entities.
							return $data;
								}  
				// If we just wanna see the connection, then we can eliminate the first "if" statement "if($_SERVER['REQUEST_METHOD'] == "POST")" and "error_reporting(E_ALL)".
				// because here in this code connection message will come only after filling the form and submitting.
				// Though filled form won't get submit to the database bcoz required code is not here yet 
				
				$email = $pass = "";
				
				$email_array = array();
				$pass_array = array();
				
				
				if(!empty($_POST['email']))
				{
					$email = test_input($_POST['email']);
				}
				
				
				
				if(!empty($_POST['pass']))
				{
					$pass = test_input($_POST['pass']);
				}
				
				
				
				$sql2 = "SELECT EMAIL FROM registration_table"; 
				$sql3 = "SELECT Password FROM registration_table";
				
				
				
				 // Here the above query is executed with the connection created with "kuldeep_singh_db".   
                if (mysqli_query($conn1, $sql2) && mysql_query($conn1, $sql3)) 
                    {
                        $email_array = mysqli_query($conn1, $sql2);
					
						$pass_array = mysqli_query($conn1, $sql3);  
						
                    } 

                    else
                     {
						echo "Check Your error ";
                       /* echo "Error: " . $sql . "<br>" . mysqli_error($conn1); */
                    }
					
					
					$size = count($email_array);
					
					
			
			
					for ($x=0; $x < $size; $x++)
					{
						if(($email == $email_array[$x]) && ($pass == $pass_array[$x]))
						{
							echo "Welcome $email";
						}							
						
						else
						{
							echo "Invalid User";
						}
					}
					
					
					
                    mysqli_close($conn1);      // Connection is closed here for the db "kuldeep_singh_db".
					
					
			
			}
		?>
	
		<script src = "js/bootstrap.js"> </script>
	</body>
</html>