<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="white-bg">
    <?php
    include 'admin_navbar.php';

    // if (!isset($_SESSION['user_name'])) {
    //    header('location: admin_login.php');
    // }
    


    // // Fetch user data
    // $username = $_SESSION['user_name']; // Assuming 'user_name' holds the username of the logged-in user
    // $sql = "SELECT first_name, last_name, first_name AS username FROM admin WHERE first_name = ?";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("s", $username);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // $user = $result->fetch_assoc();
    
    // // Extract user data if available
    // if ($user) {
    //     $firstname = $user['first_name'];
    //     $lastname = $user['last_name'];
    //     $username = $user['username'];
    // } else {
    //     // Handle the case where no data is found
    //     $firstname = '';
    //     $lastname = '';
    //     $username = '';
    // }
    // ?>

    <div class="admin-update">
        <div class="login-container pb-5">
            <form action="adminUpdate.php" method="post">
                <img src="images\admin.png" alt="Icon" class="input-icon">
                <div class="name-group">
                    <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">User Name:</label>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly> <!-- Username is readonly -->
                </div>
                <label for="oldpassword">Old Password:</label>
                <input type="password" id="oldpassword" name="oldpassword">
                <label for="newpassword">New Password:</label>
                <input type="password" id="newpassword" name="newpassword">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" id="confirmpassword" name="confirmpassword">
  
                <div class="button-container">
                    <button type="button" onclick="window.location.href='admin_ride_list.php'">Cancel</button>
                    <button type="submit" id="update" name="update">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>
