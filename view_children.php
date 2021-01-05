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
    <h1>CHILDREN</h1>
    <table>
      <tr>
        <th>CID</th>
        <th>NAME</th>
        <th>ADHAR_NO</th>
        <th>DOB</th>
        <th>AGE</th>
        <th>ADDRESS</th>
        <th>PHNO</th>
        <th>FNAME</th>
        <th>MNAME</th>

      </tr>
       <?php
        $conn=mysqli_connect("localhost","root","","playschool");
        if($conn->connect_error){
          die("connection failed".$conn->connect_error);
        }
        $sql="SELECT * from children";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
          while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["CID"]."</td><td>".$row["NAME"]."</td><td>".$row["ADHAR_NO"]."</td><td>".$row["DOB"]."</td><td>".$row["AGE"]."</td><td>".$row["ADDRESS"]."</td><td>".$row["PHNO"] ."</td><td>".$row["FNAME"]."</td><td>".$row["MNAME"]."</td></tr>";

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
