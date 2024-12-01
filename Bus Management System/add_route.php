<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triple Minds Travels</title>
    <link rel="stylesheet" href="add_route.css">
</head>

<body>
<?php include 'admin_nav.php'; ?>

    <div class="form-container">
        <h2>Add Route</h2>
        <form action="./add_routes_process.php" method="post">
            <div class="input-group">
                <label for="from">Source</label>
                <input type="text" id="from" name="source" placeholder="Starting">
            </div>

            <div class="input-group">
                <label for="from">Destination</label>
                <input type="text" id="from" name="destination" placeholder="Starting">
            </div>

            <div class="input-group">
                <label for="from">Fare</label>
                <input type="text" id="from" name="fare" placeholder="Starting">
            </div>

            <div class="input-group">
                <label for="from">Time</label>
                <input type="time" id="from" name="time" placeholder="Starting">
            </div>
           
         
            <button type="submit" name="submit">Add Route</button>
        </form>
    </div>
</body>
</html>
