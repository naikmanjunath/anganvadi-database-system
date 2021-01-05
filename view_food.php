<html>
  <head>
    <style>

    th{


      border: 1px solid black;
      transition: 0.6s ease;
      
    }

    </style>

  </head>
  <body>
    <h1>FOOD</h1>
    <table>
      <tr>
        <th>FID</th>
        <th>FD_NAME</th>
        <th>FD_QUANTITY</th>
        <th>MONTH</th>
        <th>YEAR</th>
      </tr>
       <?php
        $conn=mysqli_connect("localhost","root","","playschool");
        if($conn->connect_error){
          die("connection failed".$conn->connect_error);
        }
        $sql="SELECT FID,FD_NAME,FD_QUANTITY,MONTH,YEAR from food";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
          while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["FID"] ."</td><td>".$row["FD_NAME"]."</td><td>".$row["FD_QUANTITY"]."</td><td>".$row["MONTH"]."</td><td>".$row["YEAR"]."</td></tr>";

          }
        }
        else{
          echo"o result";
        }
        $conn->close();
        ?>
    </table>
  </body>
</html>
