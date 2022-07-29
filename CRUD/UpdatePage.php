<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Practice four</title>
    <style>
         .fix{
            width:40%;
         }

    </style>
</head>
<body>
     

   
<section class="container fix mt-3">
    <h2>Update via ID</h2>
<form method="post" action = "./Update.php">
    
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" name="Id" class="form-control" id="id" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Name</label>
    <input type="text" name="Name" class="form-control" id="pass">
  </div>
  <div class="mb-3">
    <label for="salary" class="form-label">Salary</label>
    <input type="text" name="Salary" class="form-control" id="salary">
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>





<form action="./Display.php" method="post">
<button type="submit" class="btn btn-primary mt-3">Display</button>
</form>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>