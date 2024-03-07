<?php
    include 'db.php';

    if(isset($_REQUEST['register'])){
        extract($_POST);
        if($user_email!=$user_email_confirm){
           sweetAlert('Emails are not matched!!!');
        }
        $insertData = "insert into users (user_id,user_name,user_email,user_password) values('','$user_name','$user_email','$user_password')";
        $result= mysqli_query($conn,$insertData);
        if($result){
            sweetAlert('Register Successfully!!');
           echo "<script>window.location='login.php';</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest</title>
    <link rel="stylesheet" href="./assets/style.css">
   
</head>
<body>
    <div class="container">
        <div class="content">
            <!--pinterest logo-->
            <img src="https://i.pinimg.com/originals/d3/d1/75/d3d175e560ae133f1ed5cd4ec173751a.png" alt="pin logo" class="img1" />
            <p class="header">Register  to see more</p>
            <form action="" method="post">
                <input type="text" name="user_name" placeholder="Username" class="detail" /><br />
                <input type="email" name="user_email" placeholder="Email" class="detail" /><br />
                <input type="email" name="user_email_confirm" placeholder="Confirm Email" class="detail" /><br />
                <input type="password" name="user_password" placeholder="Password" class="detail" />
                <button name="register" class="btn int">Register</button>
            </form>

            <a href="">Forgot your password?</a>

            
            <p class="or">OR</p>
            <button class="btn fbk">
                <i class="fab fa-facebook fa-lg" style="color: white; padding-right: 10px"></i><a href="#">Continue with Facebook</a></button><br />
            <button class="btn ggl">
                <i class="fab fa-google" style="color: rgb(11, 241, 22); padding-right: 10px"></i><a href="#">Continue with Google</a>
            </button>

            <footer>

                <hr />
                <p>Not on Pinterest yet? Sign up</p>
            </footer>
        </div>
    </div>
    <div class="upbtn">Sign up</div>

</body>

</html>