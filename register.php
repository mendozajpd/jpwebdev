<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <div>
        <br>
        <a href="index.php">Index Page</a>
        <a href="users.php">Users Page</a> <br><br>
    </div>

    <div class="center-half-div">
        <form action="register_submit.php" method="POST">
            <table class="table table-bordered">
                <tr>
                    <td><label>Username</label></td>
                    <td><input type="text" class="form-control" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" class="form-control" name="name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td><label>Sex</label></td>
                    <td>
                        <input type="radio" value="M" name="sex"> Male 
                        <input type="radio" value="F" name="sex"> Female 
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-success btn-lg" name="submit" type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>