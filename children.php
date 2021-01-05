<html>
<head>


  <style>
  body{
    background-image: url('photo-1488521787991-ed7bbaae773c.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    text-align:center;
    color:white;



  }
  div{
    background-color: rgba(0,0,0,.5);
    padding:10px;
    border: 0px;

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
form{
text-align:left;
padding-left:560px;

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
    <h1>CHILDREN</h1>
    <form   method="post" action="">
      CID:<input name="CID" placeholder="Enter cid" /><br /><br />
      NAME:<input name="NAME" placeholder="Enter name" /><br /><br />
      ADHAR_NO:<input name="ADHAR_NO" placeholder="Enter adhar_no" /><br /><br />
      DATE OF BIRTH:<input name="DOB" placeholder="Enter dob" type="date" /><br /><br />
      AGE:<input name="AGE" placeholder="Enter age" /><br /><br />
      ADDRESS:<input name="ADDRESS" placeholder="Enter address" /><br /><br />
      PHONE.NO:<input name="PHNO" placeholder="Enter pohone number" /><br /><br />
      FATHER NAME:<input name="FNAME" placeholder="Enter father name" /><br /><br />
      MOTHER NAME:<input name="MNAME" placeholder="Enter mother name" /><br /><br />
      <input type="submit" name="submit" value="submit" /><br /><br />
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



               $CID_entered = $_POST["CID"];
               $NAME_entered = $_POST["NAME"];
               $ADHAR_NO_entered = $_POST["ADHAR_NO"];
               $DOB_entered = $_POST["DOB"];    // shall we declare smthg here?? no
               $AGE_entered = $_POST["AGE"];
               $ADDRESS_entered = $_POST["ADDRESS"];
               $PHNO_entered = $_POST["PHNO"];
               $FNAME_entered = $_POST["FNAME"];
               $MNAME_entered = $_POST["MNAME"];




                if(empty($CID_entered ))
               {
                   echo "</br>CID can't be empty<br/>";
               }

               else if(empty($NAME_entered))
               {
                   echo "</br>please enter student_name<br/>";
               }

               else if(empty($DOB_entered))
               {
                   echo "please enter date of birth<br/>";
               }

               else if(empty($AGE_entered))
               {
                   echo "</br>please enter student AGE<br/>";
               }

               else if(empty($ADDRESS_entered))
               {
                   echo "</br>please enter student address<br/>";
               }


               else if(empty($PHNO_entered))
               {
                   echo "</br>please enter  PHONE NUMBER<br/>";
               }
               else if(empty($FNAME_entered))
               {
                   echo "</br>please enter  FATHER NAME<br/>";
               }
               else if(empty($MNAME_entered))
               {
                   echo "</br>please enter  MOTHER NAME<br/>";
               }


               else
               {
                   $sql = "INSERT INTO children (CID,NAME,ADHAR_NO,DOB,AGE,ADDRESS,PHNO,FNAME,MNAME) values ('$CID_entered', '$NAME_entered','$ADHAR_NO_entered','$DOB_entered','$AGE_entered','$ADDRESS_entered','$PHNO_entered','$FNAME_entered','$MNAME_entered')";

        //          echo "sql =" . $sql;
                   if(!mysqli_query($conn,$sql))
                   {
                       echo "</br>!!...NOT INSERTED...!!<br/>";
                   }
                    else
                    {
                         echo "<a style='color:white;'>!!....INSERTED SUCCESSFULLY.....!!!</a>";
                      //   header("location:children.php");
                    }
               }
        }
   ?>



    </form></center>
  <div>
</body>
</html>
