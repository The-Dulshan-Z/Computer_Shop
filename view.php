<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
	
	<body>
		<div class="adminp">
			<div>
				<center><h1>[ Admin Panel ]</h1></center>
				<a href="add.php?id=' . $row['id'] . '" class="add">Add New Order</a>
				<br/><br/>
				<hr class="ahr"/><hr class="ahr"/>
<?php 
			
				
include "dbconf.php";

$sql = "SELECT * FROM order_list";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  
	
	  
     echo "ID: " . $row["id"] . " | DATE: " . $row["date"] . " | NAME: " . $row["fname"] . " " . $row["lname"] . " | CONTACT: " . $row["contact"] . " | E-MAIL: " . $row["email"] . " | NIC: " . $row["nic"] . " | ADDRESS: " . $row["address"] . " |
	 <br/><br/>| ORDER-1: " . $row["order1"] . " | ORDER-1(BLACK): " . $row["black1"] . " | ORDER-1(WHITE): " . $row["white1"] . " | ORDER-1(WARRANTY): " . $row["warranty1"] . " |<br/>| ORDER-2: " . $row["order2"] . " | ORDER-2(BLACK): " . $row["black2"] . " | ORDER-2(WHITE): " . $row["white2"] . " | ORDER-1(WARRANTY): " . $row["warranty2"] . " |<br/>| ORDER-3: " . $row["order3"] . " | ORDER-3(BLACK): " . $row["black3"] . " | ORDER-3(WHITE): " . $row["white3"] . " | ORDER-3(WARRANTY): " . $row["warranty3"] . " |<br/>| ORDER-4: " . $row["order4"] . " | ORDER-4(BLACK): " . $row["black4"] . " | ORDER-4(WHITE): " . $row["white4"] . " | ORDER-4(WARRANTY): " . $row["warranty4"] . " |<br/>| ORDER-5: " . $row["order5"] . " | ORDER-5(BLACK): " . $row["black5"] . " | ORDER-5(WHITE): " . $row["white5"] . " | ORDER-5(WARRANTY): " . $row["warranty5"] . " |<br/>| ORDER-6: " . $row["order6"] . " | ORDER-6(BLACK): " . $row["black6"] . " | ORDER-6(WHITE): " . $row["white6"] . " | ORDER-6(WARRANTY): " . $row["warranty6"] . "| |<br/>|CUSTERMIZATION: " . $row["custermize"];
		 
    echo '<br/>';
   echo '<a href="edit.php?id=' . $row["id"] . '" class="edit">Edit User</a> | <a href="delete.php?id=' . $row['id'] . '" class="delete">Delete</a>';
    echo '<hr class="ahr"/><hr class="ahr"/>';
    echo '<br/><br/>';
  }
 
	
} else {
  echo '0 results';
}
				
				
?>
		</div>
			</div>
		
	
		
</body>

 

