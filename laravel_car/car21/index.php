<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page | Car </title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/89968653ea.js" crossorigin="anonymous"></script>

    
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>
<body>
    
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 15%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 15px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}
</style>
<body>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa-solid fa-car ikon"></i></a> 
  <a href="#"><i class="fa-solid fa-comment ikon"></i></a> 
  <a href="registry.php"><i class="fa-solid fa-right-to-bracket"></i>Sign in</a>
  <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Log in (Users)</a> 
  <a href="panellogin.php"><i class="fa-solid fa-right-to-bracket"></i>Login (Admin)</a> 
</div>

</body>
</html> 


    <section id="mainpage">
        <div id="black"> 
            
        </div>
        <div id="content">
            <h2>Cars</h2>
            <hr width= 150>
            <p>Car is a passion</p>
        </div>
     </section>
    
    <section id="mainpage">
   
      
    </section>

    <section id="contact">
        <div class="container">
          <h2 id="h3contact">Contact</h2>

       

            <form action="index.php" method="post">


            <div id="contactopak">
                <div id="formgroup">
                    <div id="leftform">
                        <input type="text" name="name" placeholder="Name Surname" required class="form-control">
                        <input type="text" name="tel" placeholder="Telephone Number" required class="form-control">
                    </div>
                    <div id="rightform">
                        <input type="email" name="mail" placeholder="Email address" required class="form-control">
                        <input type="text" name="subject" placeholder="Topic Title" required class="form-control">
                    </div>
                    <textarea name="message" id="" cols="20" placeholder="Enter message" rows="15" required class="form-control"></textarea> 
                     <input type="submit" value="Send">
                </div>
                
               
                
            </div>
            </form> 

            <footer>
                <a href="#menu"><i class="fa-solid fa-turn-up"></i></a>
            </footer>

        

    </section>

    
</body>
</html>

<?php

include("connection.php");
if(isset($_POST["name"], $_POST["tel"], $_POST["mail"], $_POST["subject"], $_POST["message"])){
    $name_surname=$_POST["name"];
    $telephone=$_POST["tel"];
    $email=$_POST["mail"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];


    $insert="INSERT INTO cmtn (name_surname, phone, email, topic, message) VALUES ('".$name_surname."','".$telephone."','".$email."','".$subject."','".$message."')";
    if($connect->query($insert)===TRUE){
       echo"<script>alert('Your message has been sent successfully!')</script>";
    }
    else{
        echo"<script>alert('There was an error sending your message!')</script>";
    }

}

?>


