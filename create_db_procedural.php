

    <html>
    <head>
        <!--<meta http-equiv="refresh" content="5">-->
    </head>
    <!--This will give an error after 5 seconds-->
    <!--bcoz this page will get refresh in 5 second and DB already exist error will be thrown -->
    <body>
    <?php

    // This is the right way of connecting with DB and creating a DB
    $servername = "localhost";
    $username = "root";
    $password = "secret";

    // Create connection
    // we can give db also as the 4th parameter.
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE myDB3";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
    </body>
    </html>
