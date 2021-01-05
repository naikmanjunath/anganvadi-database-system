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
    <h1>ATTENDENCE</h1>
    <table>
      <tr>
        <th>SID</th>
        <th>TOTAL_CLS</th>
        <th>DATE_FROM</th>
        <th>DATE_TO</th>
        <th>PRESENT</th>
        <th>ABSENT</th>


      </tr>
       <?php
        $conn=mysqli_connect("localhost","root","","playschool");
        if($conn->connect_error){
          die("connection failed".$conn->connect_error);
        }
        $sql="SELECT * from attendence";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
          while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["SID"]."</td><td>".$row["TOTAL_CLS"]."</td><td>".$row["DATE_FROM"]."</td><td>".$row["DATE_TO"]."</td><td>".$row["PRESENT"]."</td><td>".$row["ABSENT"]."</td></tr>";

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
