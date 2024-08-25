
 <?php
   include("DB/config.php");
   session_start();
   if(isset($_POST['lemail']) && isset($_POST['lpass']))
   {
    $email=$_POST['lemail'];
    $password=$_POST['lpass'];
    $sql="SELECT * FROM details WHERE email='$email' AND pass='$password' ";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result))
    {
        header("Location:main.php");
    }
    else {
        header("Location:index.php?signup=fail");
    }
   }
?> 