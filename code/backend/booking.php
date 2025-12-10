<?php
session_start();

if ($_POST) {
    $type = $_POST['bookingType'];

    if ($type == 'hotel') {
        $_SESSION['bookings'][] = [
            'type' => 'hotel',
            'guest' => $_POST['hotelGuestName'],
            'email' => $_POST['hotelGuestEmail'],
            'hotel' => $_POST['hotelName'],
            'checkin' => $_POST['checkIn'],
            'checkout' => $_POST['checkOut'],
            'rooms' => $_POST['rooms']
        ];
    }

    if ($type == 'flight') {
        $_SESSION['bookings'][] = [
            'type' => 'flight',
            'departure' => $_POST['departure'],
            'destination' => $_POST['destination'],
            'date' => $_POST['departDate'],
            'time' => $_POST['DepartTime'],
            'passengers' => $_POST['passengers'],
            'class' => $_POST['flightClass']
        ];
    }

    if ($type == 'cruise') {
        $_SESSION['bookings'][] = [
            'type' => 'cruise',
            'ship' => $_POST['shipName'],
            'port' => $_POST['departurePort'],
            'depart' => $_POST['cruiseDepartDate'],
            'return' => $_POST['cruiseReturnDate'],
            'passengers' => $_POST['cruisePassengers'],
            'cabin' => $_POST['cabinType']
        ];
    }

    if ($type == 'activity') {
        $_SESSION['bookings'][] = [
            'type' => 'activity',
            'name' => $_POST['activityName'],
            'location' => $_POST['activityLocation'],
            'date' => $_POST['activityDate'],
            'participants' => $_POST['activityParticipants'],
            'requests' => $_POST['specialRequests']
        ];
    }

    if ($type == 'car') {
        $_SESSION['bookings'][] = [
            'type' => 'car',
            'pickup' => $_POST['pickupLocation'],
            'dropoff' => $_POST['dropoffLocation'],
            'date' => $_POST['pickupDate'],
            'time' => $_POST['pickupTime'],
            'passengers' => $_POST['carPassengers']
        ];
    }

    header("Location: booking.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Bookings</title>
</head>
<body>
<h1>All Bookings</h1>

<?php if ($_SESSION['bookings']): ?>
<table border="1" cellpadding="5">
<tr><td>#</td><td>Type</td><td>Details</td></tr>
<?php foreach ($_SESSION['bookings'] as $i => $b): ?>
<tr>
<td><?= $i+1 ?></td>
<td><?= $b['type'] ?></td>
<td>
<?php foreach ($b as $k => $v): ?>
<?php if ($k != 'type') echo "$k: $v<br>"; ?>
<?php endforeach; ?>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php else: ?>
<p>No bookings yet.</p>


<a href="../html/booking.html">Back to Booking Form</a>
</body>
</html>
