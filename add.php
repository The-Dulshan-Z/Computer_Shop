<?php
// include database connection file
include_once("dbconf.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
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
		
	// update user data
	$sql = "SELECT * FROM order_list";

    $result = mysqli_query($conn, $sql);
	
	// Redirect to homepage to display updated user in list
	echo "window.location.href=('view.php')";
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$sql = "SELECT * FROM order_list";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
	$date = $row['date'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $contact = $row['contact'];
    $email = $row['email'];
    $nic = $row['nic'];
    $address = $row['address'];
    $order1 = $row['order1'];
    $black1 = $row['black1'];
    $white1 = $row['white1'];
    $warranty1 = $row['warranty1'];
    $order2 = $row['order2'];
    $black2 = $row['black2'];
    $white2 = $row['white2'];
    $warranty2 = $row['warranty2'];
    $order3 = $row['order3'];
    $black3 = $row['black3'];
    $white3 = $row['white3'];
    $warranty3 = $row['warranty3'];
    $order4 = $row['order4'];
    $black4 = $row['black4'];
    $white4 = $row['white4'];
    $warranty4 = $row['warranty4'];
    $order5 = $row['order5'];
    $black5 = $row['black5'];
    $white5 = $row['white5'];
    $warranty5 = $row['warranty5'];
    $order6 = $row['order6'];
    $black6 = $row['black6'];
    $white6 = $row['white6'];
    $warranty6 = $row['warranty6'];
    $custermize = $row['custermize'];

}
?>
<html>
<head>	
	<title>Add Order</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
	<div class="orderpg">
	<a href="view.php" class="back">Back</a>
	<br/><br/>
	
	<form class="form" method="POST" name="myForm" action="create2.php">
		<table>
			
			<tr>
				<th colspan="2"><h1>Add New Order</h1></th>
				<th></th>
			</tr>
			
			<tr>
				<td><label>Current Date &amp; Time :</label></td>
				<td><input type="datetime-local" id="datetime" name="date"></td>
			</tr>
			
			<tr>
				<td><label>First Name :</label></td>
				<td><input type="text" name="fname" placeholder="Enter Your First Name(required)" id="fname"></td>
			</tr>
			
			<tr>
				<td><label>Last Name :</label></td>
				<td><input type="text" name="lname" placeholder="Enter Your Last Name (required)" id="lname"></td>
			</tr>
			
			<tr>
				<td><label>Contact No :</label></td>
				<td>
					<input type="number" name="contact" placeholder="Enter Your Contact Number (required)" id="contact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>

				</td>
			</tr>
			
			<tr>
				<td><label>E-mail :</label></td>
				<td><input type="email" name="email" placeholder="Enter Your E-mail" id="email"></td>
			</tr>
			
			<tr>
				<td><label>NIC :</label></td>
				<td><input type="text" name="nic" placeholder="Enter Your NIC (required)" id="nic"></td>
			</tr>
			
			<tr>
				<td><label>Address :</label></td>
				<td>
					<textarea name="address" placeholder="Enter Your Address (required)" rows="4" cols="80" id="address"></textarea>
				</td>
			</tr>
			
			<tr>
				<td><label>Order 1 :</label></td>
				<td>
					<select name="order1">
						<option selected value="None">Choose A Product</option>
						<option>ASUS TUF F15 (2023)</option>
						<option>DELL Alienware M18</option>
						<option>HP OMEN 16</option>
						<option>MSI Bravo 15 B7E</option>
						<option>LENOVO LEGION 5 GEN 6 (15, AMD)</option>
						<option>Razer Blade 15</option>
					</select>
					
					<label class="order_color">(Black Colour)Qty:</label>
					
					<select name="black1">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
					
					<label class="order_color">(White Colour)Qty:</label>
					
					<select name="white1">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
	
					
					<br/><br/><br/>
					<label>Warrenty :</label>
					
					<input type="radio" name="warranty1" checked="true" value="None"><lable>None</lable>
					<input type="radio" name="warranty1" value="1 Year"><lable>1 Year</lable>
					
				</td>
			</tr>
			
			<tr>
				<td><label>Order 2 :</label></td>
				<td>
					<select name="order2">
						<option selected value="None">Choose A Product</option>
						<option>ASUS TUF F15 (2023)</option>
						<option>DELL Alienware M18</option>
						<option>HP OMEN 16</option>
						<option>MSI Bravo 15 B7E</option>
						<option>LENOVO LEGION 5 GEN 6 (15, AMD)</option>
						<option>Razer Blade 15</option>
					</select>
					
					<label class="order_color">(Black Colour)Qty:</label>
					
					<select name="black2">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
					
					<label class="order_color">(White Colour)Qty:</label>
					
					<select name="white2">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
	
					
					<br/><br/><br/>
					<label>Warrenty :</label>
					
					<input type="radio" name="warranty2" checked="true" value="None"><lable>None</lable>
					<input type="radio" name="warranty2" value="1 Year"><lable>1 Year</lable>
				</td>
			</tr>
			
			<tr>
				<td><label>Order 3 :</label></td>
				<td>
					<select name="order3">
						<option selected value="None">Choose A Product</option>
						<option>ASUS TUF F15 (2023)</option>
						<option>DELL Alienware M18</option>
						<option>HP OMEN 16</option>
						<option>MSI Bravo 15 B7E</option>
						<option>LENOVO LEGION 5 GEN 6 (15, AMD)</option>
						<option>Razer Blade 15</option>
					</select>
						
					<label class="order_color">(Black Colour)Qty:</label>
					
					<select name="black3">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
					
					<label class="order_color">(White Colour)Qty:</label>
					
					<select name="white3">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
	
					
					<br/><br/><br/>
					<label>Warrenty :</label>
					
					<input type="radio" name="warranty3" checked="true" value="None"><lable>None</lable>
					<input type="radio" name="warranty3" value="1 Year"><lable>1 Year</lable>
				</td>
			</tr>
			
			<tr>
				<td><label>Order 4 :</label></td>
				<td>
					<select name="order4">
						<option selected value="None">Choose A Product</option>
						<option>ASUS TUF F15 (2023)</option>
						<option>DELL Alienware M18</option>
						<option>HP OMEN 16</option>
						<option>MSI Bravo 15 B7E</option>
						<option>LENOVO LEGION 5 GEN 6 (15, AMD)</option>
						<option>Razer Blade 15</option>
					</select>
					
					<label class="order_color">(Black Colour)Qty:</label>
					
					<select name="black4">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
					
					<label class="order_color">(White Colour)Qty:</label>
					
					<select name="white4">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
	
					
					<br/><br/><br/>
					<label>Warrenty :</label>
					
					<input type="radio" name="warranty4" checked="true" value="None"><lable>None</lable>
					<input type="radio" name="warranty4" value="1 Year"><lable>1 Year</lable>
				</td>
			</tr>
			
			<tr>
				<td><label>Order 5 :</label></td>
				<td>
					<select name="order5">
						<option selected value="None">Choose A Product</option>
						<option>ASUS TUF F15 (2023)</option>
						<option>DELL Alienware M18</option>
						<option>HP OMEN 16</option>
						<option>MSI Bravo 15 B7E</option>
						<option>LENOVO LEGION 5 GEN 6 (15, AMD)</option>
						<option>Razer Blade 15</option>
					</select>
					
					<label class="order_color">(Black Colour)Qty:</label>
					
					<select name="black5">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
					
					<label class="order_color">(White Colour)Qty:</label>
					
					<select name="white5">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
	
					
					<br/><br/><br/>
					<label>Warrenty :</label>
					
					<input type="radio" name="warranty5" checked="true" value="None"><lable>None</lable>
					<input type="radio" name="warranty5" value="1 Year"><lable>1 Year</lable>
				</td>
			</tr>
			
			<tr>
				<td><label>Order 6 :</label></td>
				<td>
					<select name="order6">
						<option selected value="None">Choose A Product</option>
						<option>ASUS TUF F15 (2023)</option>
						<option>DELL Alienware M18</option>
						<option>HP OMEN 16</option>
						<option>MSI Bravo 15 B7E</option>
						<option>LENOVO LEGION 5 GEN 6 (15, AMD)</option>
						<option>Razer Blade 15</option>
					</select>
					
					<label class="order_color">(Black Colour)Qty:</label>
					
					<select name="black6">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
					
					<label class="order_color">(White Colour)Qty:</label>
					
					<select name="white6">
						<option selected>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5-MAX</option>
					</select>
	
					
					<br/><br/><br/>
					<label>Warrenty :</label>
					
					<input type="radio" name="warranty6" checked="true" value="None"><lable>None</lable>
					<input type="radio" name="warranty6" value="1 Year"><lable>1 Year</lable>
				</td>
			</tr>
			
			<tr>
				<td><label>Custermization Request :</label></td>
				<td>
					<textarea name="custermize" id="custermize" rows="8" cols="80"></textarea>
				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					<center>
					<input type="reset" name="reset" value="Reset" id="reset">
					<input type="submit" name="submit" value="Submit" id="submit">

					</center>	
				</td>
				
				<td></td>
			</tr>
			
		</table>
	</form>
		</div>
	
<script src="order.js" type="text/javascript"></script>

</body>
</html>

