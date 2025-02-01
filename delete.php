<?php
include_once("dbconf.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM order_list WHERE id=$id");

// Display the confirmation dialog using JavaScript
echo '<script>
    if (' . $result . ') {
        // Proceed with the deletion
        window.location.href = "delete.php?id=' . $id . '&confirm=true";
        alert("Order Deleted Successfully.");
		window.location.href = "view.php";
    } else {
        // Cancel the deletion
        alert("Order Deletion Canceled.");
        // Redirect to the view page if deletion is canceled
        window.location.href = "view.php";
    }
</script>';
?>
