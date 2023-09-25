<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    // Perform the update operation here, or redirect to your update.php page with the ID.
    header("Location: update.php?updateid=$id");
    exit();
}

$sql = "SELECT * FROM form";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Form</title>
    <style>
        a{
            text-decoration: none;
            color:black;
        }
    </style>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>UpdateForm</legend>
            <?php
            if($result){
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $password = $row['password'];
                $cpassword = $row['cpassword'];
                $email = $row['email'];

                echo '
                <div>
                    <label>Choose ID:</label>
                    <select name="id">
                        <option value="' . $id . '">' . $id . '</option>
                    </select>
                </div>
                <div>
                    <label>UserName:</label>
                    <br>
                    <input type="text" name="name" value="' . $name . '">
                </div>
                <div>
                    <label>Password:</label>
                    <br>
                    <input type="password" name="password" value="' . $password . '">
                </div>
                <div>
                    <label>Confirm Password:</label>
                    <br>
                    <input type="password" name="cpassword" value="' . $cpassword . '">
                </div>
                <div>
                    <label>Email:</label>
                    <br>
                    <input type="email" name="email" value="' . $email . '">
                </div>
                <br>
                <div>
                    <button type="submit" name="update"><a href="update.php?updateid=' . $id . '">Update</a></button>
                </div>';
            }
        }
            ?>
        </fieldset>
    </form>
</body>
</html>
