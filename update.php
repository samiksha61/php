<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql = "SELECT * from form where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['name'];
$password = $row['password'];
$cpassword = $row['cpassword'];
$email = $row['email'];

if (isset($_POST['update'])) {
    $id = $_POST['id']; 
    $name = $_POST['name'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];

    $sql = "UPDATE form SET name='$name', password='$password', cpassword='$cpassword', email='$email' WHERE id='$id'";

    $result = mysqli_query($con, $sql);


     if ($result) {
         header('location: display.php');
     } else {
         die(mysqli_error($con));
    }
 }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Form</title>
   
</head>

<body>
    <form method="post">    
        <fieldset>
            <legend>UpdateForm</legend>
            
                        
                
            <div>
                <label>Choose ID:</label>

                <select name="id" >
                    <option value="<?php echo $id; ?>" selected><?php echo $id; ?></option>
                </select>
            </div>
            <div>
                <label>UserName:</label>
                <br>
                <input type="text" name="name" value="<?php echo $name ?>">
            </div>
            <div>
                <label>Password:</label>
                <br>
                <input type="password" name="password" value="<?php echo $password; ?>">
            </div>
            <div>
                <label>Confirm Password:</label>
                <br>
                <input type="password" name="cpassword" value=<?php echo $cpassword; ?>>
            </div>
            <div>
                <label>Email:</label>
                <br>
                <input type="email" name="email" value=<?php echo $email; ?>>
            </div>
            <br>
            <div>
                <button type="submit" name="update">Update</button>
            </div>
                    
        </fieldset>
    </form>
</body>

</html>