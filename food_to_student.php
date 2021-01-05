<html>
<html>
<head>
<style>
body{
  background-image: url('healthiest-foods-blueberry-yogurt-1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  text-align: center;
  color:rgba(0,0,0,.1);



}
form{
  color:rgba(255,255,0,1);
  font-weight: bolder;
  padding-bottom: 250px;
 
  text-align:left;
 padding-left:560px;


}
div{
  background-color: rgba(153,204,255,.3)
}
h1{
  color:black;
  background-color: rgba(51,51,255,.1)


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
    <h1>FOOD SUPPLY TO STUDENT</h1>
    <form   method="post" action="#">
      SID:<input name="SID" placeholder="Enter SID" /><br /><br />
      FID:<input name="FID" placeholder="Enter FID" /><br /><br />
      
      QUANTITY:<input name="QUANTITY" placeholder="Enter  quantity" /><br /><br />
      MONTH:<input  name="MONTH" placeholder="Enter month" /><br /><br />
      YEAR:<input  name="YEAR" placeholder="Enter YEAR" /><br /><br />
      <input type="submit" value="sumbit" name="submit" />
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
		$FID_entered = $_POST["FID"];
                
                $QUANTITY_entered = $_POST["QUANTITY"];
		
                $MONTH_entered = $_POST["MONTH"];    // shall we declare smthg here?? no
                $YEAR_entered = $_POST["YEAR"];
                if(empty($SID_entered ))
                {
                    echo "</br> please enter the SID <br/>";
                }

                else if(empty($FID_entered))
                {
                    echo "</br>please enter FID<br/>";
                }

                else if(empty($QUANTITY_entered))
                {
                    echo "please enter FOOD QUANTITY<br/>";
                }

                else if(empty($MONTH_entered))
                {
                    echo "</br>ENTER MONTH<br/>";
                }
                else
                {
                    $sql = "INSERT INTO food_to_student (SID,FID,QUANTITY,MONTH,YEAR) values ('$SID_entered', '$FID_entered','$QUANTITY_entered','$MONTH_entered','$YEAR_entered')";

//                    echo "sql =" . $sql;
                    if(!mysqli_query($conn,$sql))            //there was like
                    {
                        echo "</br>!!...NOT INSERTED...!!<br/>";
                    }
                     else
                     {
                          echo "<a style='color:black;'>!!....INSERTED SUCCESSFULY....!!!</a>";
                 //        header("location:table1.php");
                     }
                }
         }
    ?>
  <div>
</body>
</html>
