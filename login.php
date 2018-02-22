<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,"practice");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $query = "select * from login";
    $result = $conn->query($query);
    while($row = $result->fetch_assoc())
    {
        if($row['username']==$_POST['username'] && $row['password']==$_POST['password'] )
        {
            header("location:home.php");
        }
    
    }
?>