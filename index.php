<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitman</title>
    <link
            rel="icon"
            href=
            "images.png"
            type="image/x-icon"
        />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>
<body>
    <div class="bod">  
        <div class="photo">
        </div>
        <div class="seperate">
                <div class="container" id="signup">
                <form action="index.php" method="post" onsubmit="return validatePasswords()">
                        <div class="landing">
                            <button id="b1" onclick="showLogin()">Login</button>
                            <button id="b2" onclick="showSignup()">Signup</button>
                        </div>
                        <h2>SIGN-UP</h2>
                        <div>
                           
                            <i class="bi bi-person-fill"></i>
                        <input type="text" name="name" id="name" placeholder=" enter your name" required><br><br>
                    </div>
                    <div>
                        
                        <i class="bi bi-envelope-fill"></i>
                        <input type="email" name="email" id="email" placeholder=" enter your email" required><br><br>
                    </div>
                    <div>
                        <i class="bi bi-key-fill"></i>
                      <input type="password" name="pass" id="pass" placeholder="Enter your password" required><br><br>
                    </div>
                    <div>
                        <i class="bi bi-key-fill"></i>
                        <input type="password" name="pass1" id="pass1" placeholder="Re-enter your password" required><br><br>
                        <small id="passwordError" style="color: red; display: none;">Re-Enter correct password</small>
                    </div>

            <div>
                
                <i class="bi bi-phone-fill"></i>
                <input type="text" name='mobile' id="number" placeholder="enter your mobile number" required><br><br>
            </div>
            <div>
                <button name="submit">Submit</button><br><br>
            </div>
        </form>
        </div>
        <form action="login.php" method="post">
            <div class="login" id="login">
                <div class="landing">
                    <button id="b1" onclick="showLogin()">Login</button>
                    <button id="b2" onclick="showSignup()">Signup</button>
                </div>
                <h2>LOGIN</h2>
                <div>
                    <i class="bi bi-envelope-fill"></i>
                    <input type="email" name="lemail" id="email" placeholder=" enter your email" required><br><br>
                </div>
                <div>
                    <i class="bi bi-key-fill"></i>
                    <input type="password" name="lpass" id="pass" placeholder=" enter your password" required><br><br>
                </div>
                <div>
                    <button>Submit</button><br><br>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    <script>
        function showLogin() {
            document.getElementById('login').style.display = 'flex';
            document.getElementById('signup').style.display = 'none';
            // document.querySelector('.landing').style.display = 'none';
    }
    
    function showSignup() {
        document.getElementById('signup').style.display = 'flex';
        document.getElementById('login').style.display = 'none';
        // document.querySelector('.landing').style.display = 'none';
    }
    function validatePasswords() {
    const pass = document.getElementById('pass').value;
    const pass1 = document.getElementById('pass1').value;
    const errorElement = document.getElementById('passwordError');

    if (pass !== pass1) {
        errorElement.style.display = 'block'; // Show the error message
        return false;  // Prevent the form from submitting
    } else {
        errorElement.style.display = 'none'; // Hide the error message
    }
    return true;  // Allow the form to submit
}

</script>
</body>
</html>
<?php
   include("DB/config.php");
   if(isset($_POST['submit']))
   {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass1=$_POST['pass1'];
    $mobile=$_POST['mobile'];
    
    $result=mysqli_query($mysqli,"insert into details value('','$name','$email','$pass','$pass1','$mobile')");

    if($result)
    {
      ?>
            <script>
                swal({
                    title: "SIGN UP DONE",
                    icon: "success",
                });
            </script>
            <?php
    }
    else{
        echo "Something went wrong,try again";
    }
   }
?> 
<?php
if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
    echo '<script>
        swal({
            title: "Something Went Wrong,Try Again",
            icon: "error",
        });
    </script>';
}
?>