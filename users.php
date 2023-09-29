<?php require_once ("db_connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<style>
    .hide{
        display:none;
    }
</style>
// yesser
<body>
    <div>
        <br>
        <a href="index.php">Index Page</a>
        <!-- <a href="users.php">Users Page</a> <br><br> -->
    </div>

    
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $sex = $row['sex'];
            $name = $row['name'];
            $id = $row['id'];
        }
    } else {
        echo "0 results";
    }
    
    $numberRows = $result->num_rows;
    echo "
    
    <table class = 'table table-bordered'>
    <tr>
    <td>
    <label> ID </label>
    </td>
    <td>
    <label> USERNAME </label>
    </td>
    <td>
    <label> NAME </label>
    </td>
    <td>
    <label> SEX </label>
    </td>
    </tr>
    ";

    for($i = 1; $i <= $numberRows; $i++) { // this is not an effective way of putting out data from the database
        $sql = "SELECT * FROM users WHERE id = $i";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) 
        {
            $username = $row['username'];
            $sex = $row['sex'];
            $name = $row['name'];
            $id = $row['id'];
        }

        echo '
        <tr id="user'.$id.'">
        <td>
        '.$id.'
        </td>
        <td> 
        '.$username.'
        </td>
        <td> 
        '.$name.'
        </td>
        <td> 
        '.$sex.'
        </td>
        <td>
        <button class="btn btn-success btn-lg" name="submit" type="submit">Edit</button>
        <button class="btn btn-success btn-lg" name="submit" type="submit">Delete</button>
        </td>
        <td>
        <button class="delete-user" data-id="'.$id.'"> Delete </button>
        <div class="hide delete-options" id="options'.$id.'"> <br>
        <label> Are you sure you want to delete? </label>
            <button class = "btn btn-success delete-submit" data-id="'.$id.'">Yes</button>
            <button class = "btn btn-success delete-submit" data-id="'.$id.'">No</button>
        </div>
        </td>
        </tr>
        ';
    }
    echo "
    </table>
    "
    ?>
    <script type="text/javascript" language="javascript" src="js/jquery-3.7.1.min.js"> </script>
    <script type="text/javascript" language="javascript" src="js/users.js"> </script>
</body>
</html>