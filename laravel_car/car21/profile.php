 <?php

session_start();
 if(isset($_SESSION["user_name"])) 
 {

    echo "<h3>".$_SESSION["user_name"]." WELCOME</h3>";
    echo "<h3>".$_SESSION["email"]."</h3>";
    echo "<a href='exit.php' style='color:red; background-color:yellow;border:1px solid red;
    padding:5px 5px;'>EXIT</a>";

 }
 else
{
    echo "You cannot view this page!";
}

 ?>