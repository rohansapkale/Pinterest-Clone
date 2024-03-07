<?php session_start();

include 'db.php';
if(isset($_REQUEST['login'])){
    extract($_POST);
    $check = "Select * from users where user_name='$user_name' and user_password='$user_password'";
    $result= mysqli_query($conn,$check);
   
    if(mysqli_num_rows($result)==1){
        echo "<script>window.location='feed.php';</script>";

    }else{
        sweetAlert('Something went wrong please try agian!!');
        echo "<script>window.history.back();</script>";
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
            <p class="header">Log in to see more</p>
            <form action="" method="post">
                <input type="text" name="user_name" placeholder="Username" class="detail" /><br />
                <input type="password" name="user_password" placeholder="Password" class="detail" />
                <button name="login" class="btn int">login</button>
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