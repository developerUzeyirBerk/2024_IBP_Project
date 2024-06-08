<?php

include("project.php");

$username_err="";
$password_err="";
if(isset($_POST["login"]))
{

    if(empty($_POST["username"]))
    {
        $username_err="Username cannot be empty!";
    }
   
        else{
            $username=$_POST["username"];

        }



          if(empty($_POST["password"])){

            $password_err="Password cannot be empty!";

          }
          else{
            $password=($_POST["password"]);
          }




        

    if(isset($username)  && isset($password)){

   
    $selection = "SELECT * FROM users WHERE user_name ='$username'";
    $run=mysqli_query($project,$selection);
    $numreg = mysqli_num_rows($run);

    if($numreg>0){
        $relerec= mysqli_fetch_assoc($run);
        $haspas=$relerec["password"];

        if(password_verify($password,$haspas)){
            session_start();
            $_SESSION["user_name"]=$relerec["user_name"];
            $_SESSION["email"]=$relerec["email"];
            header("location:profile.php");
            
            
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            Password is wrong!
           </div>';
        }

    }
    else{
        echo '<div class="alert alert-danger" role="alert">
       Username is wrong!
      </div>';
    }
    


    mysqli_close($project);

}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Car_comparison</title>
  </head>
  <body>
   
  <div class="container p-5">
    <div class="card p-5">

            <form action ="login.php" method="POST">


            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User name</label>
            <input type="text" class="form-control 
            <?php
            if(!empty($username_err)){
                echo"is-invalid";
            }
            ?>
            
            " id="exampleInputEmail1" name="username" >
            <div class="invalid-feedback">
            <?php
            echo $username_err;

            ?>
            </div>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control 
            <?php
            if(!empty($password_err)){
                echo"is-invalid";
            }
            ?>
            
            " id="exampleInputPassword1" name="password" >
            <div class="invalid-feedback">
            <?php
            echo $password_err;

            ?>
            </div>
        </div>


        

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <input type="checkbox">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name= "login" class="btn btn-primary">Login</button>
        </form>

    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>