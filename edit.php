<?php

// include database connection file
include_once("dbconf.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    // Get the order ID from the form
    $id = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];

    // Get the updated order details from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];

    // Prepare the update query
    $stmt = $conn->prepare("UPDATE order_list SET fname=?, lname=?, contact=?, email=?, nic=?, address=? WHERE id=?");

    // Bind the parameters to the query
    $stmt->bind_param("ssssssi", $fname, $lname, $contact, $email, $nic, $address, $id);

    // Execute the update query
    $stmt->execute();

    // Redirect to the view page after successful update
    header("Location: view.php");
    exit();
}

// Display selected user data based on ID
// Getting ID from URL
$id = $_GET['id'];

// Fetch user data based on ID
$result = "SELECT * FROM order_list WHERE id=?";
$stmt = mysqli_prepare($conn, $result);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_array($result)) {
    $fname = $row['fname'];
    $lname = $row['lname'];
    $contact = $row['contact'];
    $email = $row['email'];
    $nic = $row['nic'];
    $address = $row['address'];
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<html>
<head>	
	<title>Edit User</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
	<div class="orderpg">
	<a href="view.php" class="back">Back</a>
	<br/><br/>
	
	<form class="form" method="POST" name="update_myForm" action="edit.php">
		<table>
			
			<tr>
				<th colspan="2"><h1>User Editor</h1></th>
				<th></th>
			</tr>
			
			 <input type="hidden" name="id" value="<?php echo $id; ?>">
			
			<tr>
				<td><label>First Name :</label></td>
				<td><input type="text" name="fname" placeholder="Enter Your First Name(required)" id="fname" value="<?php echo $fname;?>"></td>
			</tr>
			
			<tr>
				<td><label>Last Name :</label></td>
				<td><input type="text" name="lname" placeholder="Enter Your Last Name (required)" id="lname" value="<?php echo $lname;?>"></td>
			</tr>
			
			<tr>
				<td><label>Contact No :</label></td>
				<td>
				
					<input type="number" name="contact" placeholder="Enter Your Contact Number (required)" id="contact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" value="<?php echo $contact;?>" required>

				</td>
			</tr>
			
			<tr>
				<td><label>E-mail :</label></td>
				<td><input type="email" name="email" placeholder="Enter Your E-mail" id="email" value="<?php echo $email;?>"></td>
			</tr>
			
			<tr>
				<td><label>NIC :</label></td>
				<td><input type="text" name="nic" placeholder="Enter Your NIC (required)" id="nic" value="<?php echo $nic;?>"></td>
			</tr>
			 	
			<tr>
				<td><label>Address :</label></td>
				<td>
					<textarea name="address" placeholder="Enter Your Address (required)" rows="4" cols="80" id="address"><?php echo $address; ?></textarea>
				</td>
			</tr>
			
		
			
			<tr>
				<td colspan="2">
					<center>
					<input type="reset" name="reset" value="Reset" id="reset">
					<input type="submit" name="update" value="Update" id="update">

					</center>	
				</td>
				
				<td></td>
			</tr>
			
		</table>
	</form>
		</div>
	


</body>
</html>

