<?php
//connection
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
</head>
<link rel="stylesheet" href="register.css">
<link rel="icon" href=""> <!--enter location/path logo-->

<body>
    <!-- //SIGNIN/SIGNUP FORM -->
    <div class="container">
        <form action='' method='post'>
            <label> EMAIL/USERNAME</label><br />
            <input type='text' name='username' placeholder='enter email/username' required />
            <br /><br />
            <label> PASSWORD</label><br />
            <input type='password' name='password' placeholder='enter your password' required />
            <br /><br />
            <button name='signup'>SIGNUP</button>
        </form>
    </div>
</body>

</html>


<?php
//sql to post to table
if (isset($_POST['signup'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $insert = "INSERT INTO admins(ID,username,passcode) VALUES (NULL,'$username', '$password')";

    //sql to post to table
    if (isset($_POST['signup'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql_username = "SELECT username FROM admins";
        if ($query = mysqli_query($connection, $sql_username)) {

            while ($fetch = mysqli_fetch_assoc($query)) {

                if ($username == $fetch['username']) {
                    echo "<script>alert('USERNAME ALREADY REGISTERED')</script>";

                } else {
                    $insert = "INSERT INTO admins(ID,username,passcode) VALUES (NULL,'$username', '$password')";
                    if (!mysqli_query($connection, $insert)) {
                        echo "error" . mysqli_error($connection);
                    }
                }
            }
        }
    }

}



?>