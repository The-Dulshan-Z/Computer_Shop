<?php
include "dbconf.php";


if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $order1 = $_POST['order1'];
    $black1 = $_POST['black1'];
    $white1 = $_POST['white1'];
    $warranty1 = $_POST['warranty1'];
    $order2 = $_POST['order2'];
    $black2 = $_POST['black2'];
    $white2 = $_POST['white2'];
    $warranty2 = $_POST['warranty2'];
    $order3 = $_POST['order3'];
    $black3 = $_POST['black3'];
    $white3 = $_POST['white3'];
    $warranty3 = $_POST['warranty3'];
    $order4 = $_POST['order4'];
    $black4 = $_POST['black4'];
    $white4 = $_POST['white4'];
    $warranty4 = $_POST['warranty4'];
    $order5 = $_POST['order5'];
    $black5 = $_POST['black5'];
    $white5 = $_POST['white5'];
    $warranty5 = $_POST['warranty5'];
    $order6 = $_POST['order6'];
    $black6 = $_POST['black6'];
    $white6 = $_POST['white6'];
    $warranty6 = $_POST['warranty6'];
    $custermize = $_POST['custermize'];

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO `order_list` (`date`, `fname`, `lname`, `contact`, `email`, `nic`, `address`, `order1`, `black1`, `white1`, `warranty1`, `order2`, `black2`, `white2`, `warranty2`, `order3`, `black3`, `white3`, `warranty3`, `order4`, `black4`, `white4`, `warranty4`, `order5`, `black5`, `white5`, `warranty5`, `order6`, `black6`, `white6`, `warranty6`, `custermize`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters to the statement
$stmt->bind_param(
    "sssissssssssssssssssssssssssssss",
    $date,
    $fname,
    $lname,
    $contact,
    $email,
    $nic,
    $address,
    $order1,
    $black1,
    $white1,
    $warranty1,
    $order2,
    $black2,
    $white2,
    $warranty2,
    $order3,
    $black3,
    $white3,
    $warranty3,
    $order4,
    $black4,
    $white4,
    $warranty4,
    $order5,
    $black5,
    $white5,
    $warranty5,
    $order6,
    $black6,
    $white6,
    $warranty6,
    $custermize
);

    // Execute the statement
    if ($stmt->execute()) {
     echo "<script>alert('Order submitted successfully.');
	 window.location.href='view.php';
	 </script>";
		
    } else {
        echo "Error submitting order: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>
