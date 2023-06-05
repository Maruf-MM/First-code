<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>
<body>
    <form action="" method="POST">
    <label for="id">ID:</label>
    <input type="text" name="id">
    <input type="Submit" name="search" value="SEARCH"><br><br>
    <label for="name">NAME:</label>
    <input type="text" name="name"><br><br>
    <label for="email">EMAIL:</label>
    <input type="text" name="email"><br><br>
    <label for="pass">PASS:</label>
    <input type="text" name="pass">
    <input type="Submit" name="insert" value="INSERT">
    <input type="Submit" name="update" value="UPDATE">
    <input type="Submit" name="delete" value="DELETE"><br><br>
    </form>
</body>
</html>
<?php 
$conn=new mysqli('localhost','root','','crud');
if ($conn->connect_error)
{
 die("connection error".$conn->connect_error);
}
else
{
        

    if(isset($_POST['insert']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $insert="INSERT INTO users VALUE( '$id','$name','$email','$pass')";
        $queryI=$conn->query($insert);
        echo"successfully inserted";

       }

    if(isset($_POST['delete']))
        {
        $id=$_POST['id'];
        $delete="DELETE FROM users where id=$id";
        $queryD=$conn->query($delete);
        echo"Deleted successfully";
        
        }
    
        
    if(isset($_POST['update']))
    {    
        $id=$_GET['id'];
        $name=$_GET['name'];
        $email=$_GET['email'];
        $pass=$_GET['pass'];
        $update="UPDATE users SET name= $name email=$email password=$pass WHERE id=$id";
        $queryU=$conn->query($update);
        echo"Updated successfully";
        
    }
}

?>