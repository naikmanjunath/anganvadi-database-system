<html>
<head>
<style>
body{
  background-image: url('pen-on-paper.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  text-align: center;
  color:rgba(0,0,0,.1);



}
form{
  color:black;
  font-weight: bolder;
  padding-bottom: 250px;
  padding-top: 10px;
  



}
h1{
  color:black;


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
  font-weight: bolder;
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
form{
text-align:left;
padding-left:560px;}

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
 <div><br /><br />
   <h1>ATTENDENCE</h1>
   <form   method="post" action="">
      SID:<input name="SID" placeholder="Enter SID" /><br /><br />
      TOTAL CLASSES:<input name="TOTAL_CLS" placeholder="enter total number of class have taken" /><br /><br />
      DATE FROM:<input type="date" name="DATE_FROM" placeholder="enter FROM DATE" /><br /><br />
      DATE TO:<input type="date" name="DATE_TO" placeholder="enter LAST DATE" /><br /><br />
      PRESENT:<input name="PRESENT" placeholder=" " /><br /><br />
      ABSENT:<input name="ABSENT" placeholder=" " /><br /><br />
      <input type="submit" name="submit" value="submit" />
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
                  $TOTAL_CLS_entered = $_POST["TOTAL_CLS"];
                  $DATE_FROM_entered = $_POST["DATE_FROM"];
                  $DATE_TO_entered = $_POST["DATE_TO"];    // shall we declare smthg here?? no
                  $PRESENT_entered = $_POST["PRESENT"];
                  $ABSENT_entered = $_POST["ABSENT"];
                  if(empty($SID_entered ))
                  {
                      echo "</br> please enter the SID <br/>";
                  }

                  else if(empty($TOTAL_CLS_entered))
                  {
                      echo "</br>please enter TOTAL CLASS NUMBER<br/>";
                  }

                  else if(empty($DATE_FROM_entered))
                  {
                      echo "please enter FOOD QUANTITY<br/>";
                  }

                  else if(empty($DATE_TO_entered))
                  {
                      echo "</br>ENTER DATE<br/>";
                  }

                  else
                  {
                      $sql = "INSERT INTO attendence (SID,TOTAL_CLS,DATE_FROM,DATE_TO,PRESENT,ABSENT) values ('$SID_entered', '$TOTAL_CLS_entered','$DATE_FROM_entered','$DATE_TO_entered','$PRESENT_entered','$ABSENT_entered')";

  //                    echo "sql =" . $sql;
                      if(!mysqli_query($conn,$sql))            //there was like
                      {
                          echo "</br>!!NOT INSERTED!!<br/>";
                      }
                       else
                       {
                            echo "<a style='color:black;'>!!....INSERTED SUCCESSFULY....!!!</a>";
                   //        header("location:table1.php");
                       }
                  }
           }
      ?>
    </form>
  </div>
</body>
</html>
