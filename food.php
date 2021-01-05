<html>
<html>
<head>
<style>
body{
  background-image: url('7cb18679659f791b1191bea97b74dfc0.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  text-align: center;
  color:rgba(0,0,0,.1);



}
form{
  color:white;
  font-weight: bolder;
  padding-bottom: 250px;
  padding-top: 20px;
 padding-left:560px;
text-align:left;


}
div{
  background-color: rgba(0,0,0,.4)
}
h2{
  color:white;
  padding:20px;
  padding-top: 20px;
  padding-bottom: 10px;


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

  color: white;
  font-weight: bolder;

  padding: 5px 20px ;

  border: 1px solid white;
  transition: 0.6s ease;
  border-style:ridge;
  border-width: thick;
}
ul li a:hover{
  background-color: #fff;
  color:#000;
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
  </heder>
  <div><br /><br />
    <h2>FOOD</h2>
    <form   method="post" action="">
      FID:<input  name="FID" placeholder="Enter FID" /><br /><br />
      FD_NAME:<input name="FD_NAME" placeholder="Enter food name" /><br /><br />
      FD_QUANTITY:<input name="FD_QUANTITY" placeholder="Enter food quantity" /><br /><br />
      MONTH:<input  name="MONTH" placeholder="Enter month " /><br /><br />
      YEAR:<input type="year" name="YEAR" placeholder="Enter YEAR" /><br /><br />
      <input type="submit"name="submit"value="Submit">



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



                $FID_entered = $_POST["FID"];
                $FD_NAME_entered = $_POST["FD_NAME"];
                $FD_QUANTITY_entered = $_POST["FD_QUANTITY"];
                $MONTH_entered = $_POST["MONTH"];    // shall we declare smthg here?? no
		$YEAR_entered = $_POST["YEAR"]; 
                if(empty($FID_entered ))
                {
                    echo "</br> please enter the FID <br/>";
                }

                else if(empty($FD_NAME_entered))
                {
                    echo "</br>please enter FOOD NAME<br/>";
                }

                else if(empty($FD_QUANTITY_entered))
                {
                    echo "please enter FOOD QUANTITY<br/>";
                }

                else if(empty($MONTH_entered))
                {
                    echo "</br>ENTER MONTH<br/>";
                }
                else
                {
                    $sql = "INSERT INTO food (FID,FD_NAME,FD_QUANTITY,MONTH,YEAR) values ('$FID_entered', '$FD_NAME_entered','$FD_QUANTITY_entered','$MONTH_entered','$YEAR_entered')";

//                    echo "sql =" . $sql;
                    if(!mysqli_query($conn,$sql))            //there was like
                    {
                        echo "</br>!!...NOT INSERTED...!!<br/>";
                    }
                     else
                     {
                          echo "<a style='color:black;'>inserted successfully</a>";
                 //        header("location:table1.php");
                     }
                }
         }
    ?>
    </form>
  <div>
</body>
</html>
