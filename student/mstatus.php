
<!DOCTYPE html>
<html>

<head>

  <title>Menu</title>

  <style>
  
  /* Style the table */
  table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

@media only screen and (max-width: 600px) {
  th, td {
    display: block;
    width: 100%;
  }
  
  th {
    text-align: center;
  }
  
  td {
    text-align: left;
  }
}

  </style>

</head>

<body>
  <?php
 
 
    include('../dbConnect.php');

		
    session_start();
    $regno = $_SESSION['regno'];

    
    $day = date('l'); // Returns the full day name (e.g. "Monday")  


    // select the menu for all days
    $sql = "SELECT * FROM menu WHERE `day` = '$day' ";
    $result = mysqli_query($conn, $sql);

    // display the menu in a table
    if (mysqli_num_rows($result) > 0) 
    {
      echo '<table>';
      echo '<thead>';
      echo '<tr>';
      echo '<th>Today</th>';
      echo '<th>Breakfast</th>';
      echo '<th>Lunch</th>';
      echo '<th>Evening Snack</th>';
      echo '<th>Dinner</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';

      while($row = mysqli_fetch_assoc($result)) 
      {
        echo '<tr>';
        echo '<th>' . $row["day"] . '</th>';
        echo '<td>' . $row["breakfast"] . '</td>';
        echo '<td>' . $row["lunch"] . '</td>';
        echo '<td>' . $row["evening_snack"] . '</td>';
        echo '<td>' . $row["dinner"] . '</td>';
        echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';
    } 
    else 
    {
      echo "No menu found.";
    }

    // close connection
    mysqli_close($conn);

  ?>

</body>

</html>
