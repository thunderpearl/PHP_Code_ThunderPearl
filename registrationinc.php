    <?php
	//This php is used by "registration2.php"
	// "$_SERVER" is an array containing the header, path and script location.
if($_SERVER['REQUEST_METHOD'] == "POST")
{
        error_reporting(E_ALL);


                $servername = "localhost";       // this is the server's name
                $username = "root";              // username of the server, by default it is "root"
                $password = "secret";            // Password for accessing the mysql 
                $dbname = "kuldeep_singh_db";    // name of the database 


                 // Create connection with the database.
                  $conn = mysqli_connect($servername, $username, $password, $dbname);

        
                // this is the condition to check the connectionis established or not.
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                        }

				// this function is very important to avoid the exploits done by malicious script.	
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
                        if(!empty($_POST['sale_or_rent']))
                        {
                           $sare = test_input($_POST['sale_or_rent']);

                         }

                        // All the below code like above line will collect the data entered by user/client using the reference.  
                        
                       if(!empty($_POST['proptype']))
                       {
                          $proptype = test_input($_POST['proptype']);
                        }

                       

                        if(!empty($_POST['state']))
                        {
                           $state = test_input($_POST['state']);
                         }
                         

                       if(!empty($_POST['City']))
                           $city = test_input($_POST['City']);
                        


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

			
			// This is the sql query which will insert the data collected from the fields into the "kuldeep_singh_table".
            $sql="INSERT INTO kuldeep_singh_table(Name, Email, Address, Country, Landline, Mobile,Property_Req_ON, Type_of_Property, Prefered_State, Prefered_City, Budget_in_INR) 
                    VALUES ('$uname','$email', '$add', '$country', $landn, $mob, '$sare', '$proptype', '$state', '$city', $budget)";
                      
                  
				  // Here the above query is executed with the connection created with "kuldeep_singh_db".   
                if (mysqli_query($conn, $sql)) 
                    {
                        echo "New record created successfully";
                    } 

                    else
                     {
						 echo "Check Your Fields ";
                       /* echo "Error: " . $sql . "<br>" . mysqli_error($conn); */
                    }

                    mysqli_close($conn);      // Connection is closed here for the db "kuldeep_singh_db".

}
    ?>