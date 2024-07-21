<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $persons = $_POST['persons'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO reservations (name, phone, persons, reservation_date, reservation_time, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $name, $phone, $persons, $reservation_date, $reservation_time, $message);

    // Execute the statement
    if ($stmt->execute()) {
        $success_message = "New reservation successfully created!";
    } else {
        $error_message = "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Reservation</title>
    <!-- Add your CSS links here -->
</head>
<body>
    
<section class="reservation">
    <div class="container">
        <div class="form reservation-form bg-black-10">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form-left" style="display: flex; flex-direction: column; align-items: center;">
                <h2 class="headline-1 text-center">Online Reservation</h2>
                <p class="form-text text-center">
                    Booking request <a href="tel:+88123123456" class="link">+911145745800</a>
                    or fill out the order form
                </p>
                    <?php
                if (isset($success_message)) {
                    echo "<p class='success-message'>$success_message</p>";
                } elseif (isset($error_message)) {
                    echo "<p class='error-message'>$error_message</p>";
                }
                ?>

                <div class="input-wrapper" style="width: 100%;">
                    <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field" required>
                    <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field" required>
                </div>
                <div class="input-wrapper" style="width: 100%;">
                    <div class="icon-wrapper">
                        <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                        <select name="persons" class="input-field" required>
                            <option value="1">1 Person</option>
                            <option value="2">2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5 People</option>
                            <option value="6">6 People</option>
                            <option value="7">7 People</option>
                        </select>
                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>
                    <div class="icon-wrapper">
                        <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                        <input type="date" name="reservation_date" class="input-field" required>
                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>
                    <div class="icon-wrapper">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                        <select name="reservation_time" class="input-field" required>
                            <option value="08:00:00">08:00 am</option>
                            <option value="09:00:00">09:00 am</option>
                            <option value="10:00:00">10:00 am</option>
                            <option value="11:00:00">11:00 am</option>
                            <option value="12:00:00">12:00 pm</option>
                            <option value="13:00:00">01:00 pm</option>
                            <option value="14:00:00">02:00 pm</option>
                            <option value="15:00:00">03:00 pm</option>
                            <option value="16:00:00">04:00 pm</option>
                            <option value="17:00:00">05:00 pm</option>
                            <option value="18:00:00">06:00 pm</option>
                            <option value="19:00:00">07:00 pm</option>
                            <option value="20:00:00">08:00 pm</option>
                            <option value="21:00:00">09:00 pm</option>
                            <option value="22:00:00">10:00 pm</option>
                        </select>
                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>
                </div>
                <textarea name="message" placeholder="Message" autocomplete="off" class="input-field" style="width: 100%;"></textarea>
                <button type="submit" class="btn btn-secondary">
                    <span class="text text-1">Book A Table</span>
                </button>
            </form>
            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">
                <h2 class="headline-1 text-center">Contact Us</h2>
                <p class="contact-label">Booking Request</p>
                <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+911145745800</a>
                <div class="separator"></div>
                <p class="contact-label">Location</p>
                <address class="body-4">
                    67, Cannaught Place, <br>
                    New Delhi
                </address>
                <p class="contact-label">Lunch Time</p>
                <p class="body-4">
                    Monday to Sunday <br>
                    12.00 pm - 05.00 pm
                </p>
                <p class="contact-label">Dinner Time</p>
                <p class="body-4">
                    Monday to Sunday <br>
                    05.00 pm - 01.00 am
                </p>
            </div>
        </div>
    </div>
</section>
</body>
</html>
