<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <style>
        body {
            background-image: url('./assets/files/trainw2.jpeg'); /* Replace 'background-image.jpg' with your image file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: #fff;
        }
        .confirmation-container {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            border-radius: 10px;
            margin: 50px auto;
            max-width: 600px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #000000;
        }
        .confirmation-container {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="confirmation-container">
    <?php
    // Retrieve values from the form submission
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $check_in_date = $_POST['check-in-date'];
    $check_out_date = $_POST['check-out-date'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $hotel = $_POST['hotel'];
    $number_of_rooms = $_POST['age'];
    $room_type = $_POST['room-type'];
    $additional_requests = $_POST['additional'];

    // Display the confirmation details in a table
    echo "<h2>Booking Confirmation</h2>";
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>First Name</td><td>$firstname</td></tr>";
    echo "<tr><td>Last Name</td><td>$lastname</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Phone Number</td><td>$phone</td></tr>";
    echo "<tr><td>Check-in Date</td><td>$check_in_date</td></tr>";
    echo "<tr><td>Check-out Date</td><td>$check_out_date</td></tr>";
    echo "<tr><td>Country</td><td>$country</td></tr>";
    echo "<tr><td>City</td><td>$city</td></tr>";
    echo "<tr><td>Hotel</td><td>$hotel</td></tr>";
    echo "<tr><td>Number of Rooms</td><td>$number_of_rooms</td></tr>";
    echo "<tr><td>Room Type</td><td>$room_type</td></tr>";
    echo "<tr><td>Additional Requests</td><td>$additional_requests</td></tr>";
    echo "</table>";
    ?>
</div>

</body>
</html>
