<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid black;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
</style>
</head>
<body>



<table id="customers">
  <tr>
    <th>Name Surname</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Topic Title</th>
    <th>Message</th>
    <th>Date</th>


  </tr>



  <?php

  session_start();

  if($_SESSION["User"]==""){
    echo "<script>window.location.href='logout.php'</script>";
  }

  else{
    
        include("connection.php");


        $choose="Select * From cmtn";
        $result=$connect->query($choose);

        if($result->num_rows>0){

        while($pull=$result->fetch_assoc()){
            echo"<tr>
                      <td>".$pull['name_surname']."</td>
                      <td>".$pull['phone']."</td>
                      <td>".$pull['email']."</td>
                      <td>".$pull['topic']."</td>
                      <td>".$pull['message']."</td>
                      <td>".$pull['date']."</td>
          </tr>
          ";
          }
        }
        else{
          echo "No data stored in the database was found!";

        }
  }







?>




  
  
</table>

</body>
</html>



