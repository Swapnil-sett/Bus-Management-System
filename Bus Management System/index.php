<?php
include './connect.php';

$sql = "select * from routes";
$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triple Minds Travels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
</head>

<body>
<?php include 'nav.php'; ?>

<div class="container-fluid w-75 mt-5">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Route No.</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Fare</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if($result){
      $num = mysqli_num_rows($result);
      if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
          $routeId = $row['route_id'];
          $source = $row['source'];
          $destination = $row['destination'];
          $fare = $row['fare'];
          $time = $row['TIME'];

        echo '
          <tr>
      <th scope="row">'.$routeId.'</th>
      <td>'.$source.'</td>
      <td>'.$destination.'</td>
      <td>'.$fare.'</td>
        <td>'.$time.'</td>

    </tr>
        ';


        }
      }
    }
    ?>
    
  
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
