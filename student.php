<html>
<head>
<style>
body{
  background-image: url('2a062e777a4ba93eaa9959d2c583374fb3-empty-classroom-bw.rsquare.w700.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  text-align: center;
  color:rgba(0,0,0,.1);



}
form{
  color:black;
  font-weight: bolder;
  padding-bottom: 10px;
  padding-top: 20px;
 text-align:left;
 padding-left:560px;

}
div{

      background-color: rgba(102,153,153,.7);
}
h1{
  color:black;
  background-color: rgba(102,153,153,.9);

}
ul{
  float: right;
  list-style-type: none;

}
ul li{
  display:inline-block;
}
ul li a{
  text-decoration: none;

  color: black;
  font-weight:bolder;

  padding: 5px 20px ;

  border: 1px solid white;
  transition: 0.6s ease;
  border-style:ridge;
  border-width: thick;
}
ul li a:hover{
  background-color: black;
  color:white;
}


</style>
</head>
<body>
  <header>
    <div class="main">
      <ul>
        <li><a href="children.php">CHILDREN</a>

        </li>
        <li><a href="student.php">STUDENT</a></li>
        <li><a href="food.php">FOOD</a></li>

        <li><a href="food_to_student.php">FOOD SUPPLY TO STUDENT</a></li>

        <li><a href="attendence.php">ATTENDENCE</a></li>
        <li><a href="view_index.php">VIEW TABLE</a></li>
      </ul>
    </div>
  </header>

  <div><br />
    <br />
  <h1>STUDENT</h1>
    <form   method="post" action="">
      SID:<input name="SID" placeholder="Enter sid" /></b><br /><br />
      CID:<input name="CID" placeholder="Enter cid" /><br /><br />
      DATE OF JOIN:<input type="date" name="JOIN_DATE" placeholder="Enter join date" /><br /><br />
      <input type="submit" value="submit" name="submit" /><br />

    </form>
    <?php

      if(isset($_POST["submit"]))
         {
             $server_name = "localhost";
             $user_name = "root";
             $password = "";
             $dbname = "playschool";
             $port = 3306;

             //connecting
             $conn = new mysqli($server_name,$user_name,$password,$dbname,$port);

             if($conn->connect_error)
             {
                     die("Connection failed" . $conn->connect_error);//will display if not connected..

             }



             $SID_entered = $_POST["SID"];
             $CID_entered = $_POST["CID"];
             $JOIN_DATE_entered = $_POST["JOIN_DATE"];





              if(empty($SID_entered ))
             {
                 echo "</br>SID can't be empty<br/>";
             }
             else if(empty($CID_entered))
             {
                 echo "</br>please enter CID<br/>";
             }
             else if(empty($JOIN_DATE_entered))
             {
                 echo "</br>please enter JOIN DATE<br/>";
             }
             else
             {
                 $sql = "INSERT INTO student(SID,CID,JOIN_DATE) values ('$SID_entered','$CID_entered', '$JOIN_DATE_entered')";

      //          echo "sql =" . $sql;
                 if(!mysqli_query($conn,$sql))
                 {
                     echo "<a style='color:white;'></br>!!...NOT INSERTED...!!<br/></a>";
                 }
                  else
                  {
                       echo "<a style='color:white;'>!!....INSERTED SUCCESSFULLY.....!!!</a>";
                    //   header("location:children.php");
                  }
             }


      }
 ?>
</div>
</body>
</html>
