
<?php
// including the database connection file
include("../config/dbconn.php");
if(isset($_POST['submit']))
{   
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];

        $query = "INSERT INTO users (fullname, email, username, address, contact,  password) 
                VALUES ('$fullname', '$email', '$username','$address','$contact','$password')";

        $result = mysqli_query($dbconn,$query);
        
        if($result){
            //redirecting to the display page. In our case, it is index.php
        header("Location: ./user_login_page.php");
        
    }
}
?>


