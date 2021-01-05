<html>
  <head>

    <style>
    h1{
      text-align: left;
    }
    table{
      text-align: center;
    }


    th{


      border: 1px solid black;
      transition: 0.6s ease;

    }

    
    </style>

  </head>
  <body>
    <h1>STUDENT</h1>
    <table>
      <tr>
        <th>SID</th>
        <th>CID</th>
        <th>JOIN_DATE</th>

      </tr>
       <?php
        $conn=mysqli_connect("localhost","root","","playschool");
        if($conn->connect_error){
          die("connection failed".$conn->connect_error);
        }
        $sql="SELECT SID,CID,JOIN_DATE from student";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
          while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["SID"] ."</td><td>".$row["CID"]."</td><td>".$row["JOIN_DATE"]."</td></tr>";

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
