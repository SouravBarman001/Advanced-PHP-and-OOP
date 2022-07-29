<?php
$mysqli = new mysqli("localhost","root","","college");

// Checking for connections
if ($mysqli->connect_error) {
  die('Connect Error (' .
  $mysqli->connect_errno . ') '.
  $mysqli->connect_error);
}


  $sql = "SELECT * FROM teacher";
  $result = $mysqli->query($sql);
  $mysqli->close();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        form{
            margin: 0 auto;
            text-align: center;
            width: 30%;
        }
    </style>
</head>
<body>
<section>
        <h1>Teacher Table</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Salary'];?></td>
            </tr>

            <?php
                }
            ?>
        </table>






    <form method="post" action = "./Delete.php">
    
  <div class="mb-3 mt-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" name="Id" class="form-control" id="id" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Delete</button>
</form>





    </section>
</body>
</html>