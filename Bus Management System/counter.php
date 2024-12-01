<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triple Minds Travels</title>
    <link rel="stylesheet" href="counter.css">
</head>

<body>
<?php include 'counter_nav.php'; ?>

    <div class="form-container">
        <h2>Get Tickets</h2>
        <form>
            <div class="input-group">
                <label for="from">From</label>
                <input type="text" id="from" name="from" placeholder="Starting">
            </div>
            <div class="input-group">
                <label for="to">To</label>
                <input type="text" id="to" name="to" placeholder="Destination">
            </div>
            <div class="input-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="input-group">
                <label for="person">Person</label>
                <input type="number" id="person" name="person" placeholder="Passenger">
            </div>
         

            <button type="submit" name="submit">Print</button>
        </form>
    </div>
</body>
</html>


<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['submit'])) {
    // Retrieve form values and sanitize
    $from = isset($_GET['from']) ? urlencode($_GET['from']) : '';
    $to = isset($_GET['to']) ? urlencode($_GET['to']) : '';
    $date = isset($_GET['date']) ? urlencode($_GET['date']) : '';
    $person = isset($_GET['person']) ? (int)$_GET['person'] : 0;

    // Redirect to download_ticket.php with form data as query parameters
    header("Location: download_ticket.php?from=$from&to=$to&date=$date&person=$person");
    exit(); // Ensure no further code is executed after the redirect
} else {
    echo "Form data not submitted properly.";
}
?>
