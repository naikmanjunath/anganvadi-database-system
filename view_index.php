<html>
  <head>
    <style>
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
    background-color: rgba(255,153,0,1);
    color:white;
  }
  div{
    background-color: rgba(1,1,1,.6);
  }


  </style>
</head>
<body>
  <header>
    <h1>!!SELECT YOUR CHOICE:</h1>
    <div class="main">
      <ul>
        <li><a href="view_children.php">VIEW CHILDREN TABLE </a>

        </li>
        <li><a href="view_student.php">VIEW STUDENT TABLE</a></li>
        <li><a href="view_food.php">VIEW FOOD TABLE</a></li>

        <li><a href="view_food_to_students.php">FOOD SUPPLY TO STUDENT</a></li>

        <li><a href="view_attendence.php">VIEW ATTENDENCE TABLE</a></li>

      </ul>
    </div>
  </header>
</body>
</html>
