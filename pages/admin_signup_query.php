
<?php
// including the database connection file
include("../config/dbconn.php");
if(isset($_POST['submit']))
{   
    $fullname = $_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

        //updating the table
        $query = "INSERT INTO admin (fullname, email, username, password) 
                VALUES ('$fullname','$email','$username','$password')";

        $result = mysqli_query($dbconn,$query);
        
        if($result){
            //redirecting to the display page. In our case, it is index.php
        header("Location: admin_panel.php");
        }
        
    
}
?>