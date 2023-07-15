<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="register.css">
    <link rel="icon" href=""> <!--enter location/path logo-->
</head>

<body>
    <!-- SIGNIN/SIGNUP FORM -->
    <div class="container">
        <form action='' method='post'>
            <label> EMAIL/USERNAME</label><br />
            <input type='text' name='username' placeholder='enter email/username' required /> <br /><br />
            <label> PASSWORD</label><br />
            <input type='password' name='password' placeholder='enter your password' required /><br /><br />
            <button name='signup'>SIGNIN</button>
            <div class="signup">
                <p>Don't have an account? <a href="SIGNUP.php">signup</a></p>
            </div>
        </form>
    </div>
</body>

</html>


<?php
//checking for username existence
if (isset($_POST['signup'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql_username = "SELECT username FROM admins";
    $sql_password = "SELECT passcode FROM admins";
    if ($query = mysqli_query($connection, $sql_username)) {

        while ($fetch = mysqli_fetch_assoc($query)) {

            if ($username == $fetch['username']) {
                // echo "<script>alert('USERNAME IS REGISTERED')</script>";
                if ($query = mysqli_query($connection, $sql_password)) {
                    while ($fetch = mysqli_fetch_assoc($query)) {
                        if ($password == $fetch['passcode']) {

                            header('location: header.html');
                            // echo "<script>alert('passcode IS REGISTERED')</script>";
                        } else {

                            header('location: SIGNUP.php');
                        }
                    }
                }
            }
        }
    }
}
?>