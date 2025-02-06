<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>

</body>
<center>
        <?php
        include 'tampil.php';
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "latihan");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $nama = $_REQUEST["nama"];
        $email = $_REQUEST["email"];
        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO aktfitas VALUES ('','$nama','$email','$username','$password')";

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</html>