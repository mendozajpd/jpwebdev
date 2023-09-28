<?php 
    require_once ("db_connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
   	    $name = $_POST['name'];
   	    $sex = $_POST['sex'];

        $sql = "INSERT INTO users (username,name,sex)
        VALUES ('$username','$name','$sex')";

        if ($conn->query($sql) === TRUE) {
            echo "New user added succesffully";
            echo "<br>";
            echo "<a href='users.php'> Check users </a>";

        } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else {
        header('location:register.php');
    }
?>