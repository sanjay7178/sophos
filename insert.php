
<!DOCTYPE html>
<html>
 
<head>

    <title>Insert Page page</title>
</head>
 
<body>

    <center>

        <?php
 

        // servername => localhost

        // username => root

        // password => empty

        // database name => staff

        $conn = mysqli_connect("localhost", "root", "", "sophos");

         

        // Check connection

        if($conn === false){

            die("ERROR: Could not connect. "

                . mysqli_connect_error());

        }

         

        // Taking all 5 values from the form data(input)

        $username =  $_REQUEST['username'];

        $password = $_REQUEST['password'];

// <!--         $gender =  $_REQUEST['gender'];

//         $address = $_REQUEST['address'];

//         $email = $_REQUEST['email']; -->

         

        // Performing insert query execution

        // here our table name is college

        $sql = "INSERT INTO credentials  VALUES ('$username', 

            '$password')";

         

        if(mysqli_query($conn, $sql)){

            echo "<h3>welcome to sophos client connection"

                . " welcome to vitap</h3>"; 
 

//             <!-- echo nl2br("\n$username\n $password\n "

//                 . "$gender\n $address\n $email");
//  -->
        } else{

            echo "ERROR: Hush! Sorry $sql. "

                . mysqli_error($conn);

        }

         

        // Close connection

        mysqli_close($conn);

        ?>

    </center>
</body>
 
</html>