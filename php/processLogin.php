<?php
session_start()
?>


<?php
include 'credentials.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
?>


<?php
$password= sha1($_POST['password']);
$email= $_POST["email"];
$sql = "SELECT * FROM member WHERE email='".$email."'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result)>0)
{
    $dbPassword=$row['password'];
    if($password==$dbPassword)
    {
        $_SESSION['member'] = $customerId;

        echo "<script type='text/javascript'>
        window.location.href='/sushi/user.php'; 
        </script>"; 
    }
    else
    {
        $message = "login fail";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='/sushi/login.php'; 
        </script>"; 
    }
}
else
{
    $message = "login fail";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='/sushi/login.php'; 
    </script>";
}
?>