
<?php
$email= filter_input (INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty ($email)){
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "youtube";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (email,username, password)
values ('$email','$username','$password')";
if ($conn->query($sql)){
echo  '' ;
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
}
else {
    "Email should not be empty";
    die ();
}  

?>
<html>

<head>
    <meta charset="utf-8">
    
   <script>
    function pageRedirect() {
    window.location.replace("index.html")
    }
       setTimeout("pageRedirect()",1000);
       
    
    </script>
    </head>
    
    



</html>
