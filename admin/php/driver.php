<?php
	$fname = "";
	$lname = "";
    $gender = "";
    $contact = "";
    $address = "";

	if (isset($_POST['saveDriver'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];

		mysqli_query($con, "INSERT INTO drivers (fname, lname, gender, contact, address) VALUES ('$fname', '$lname', '$gender', '$contact', '$address')"); 
		$_SESSION['message'] = "Driver saved";
		header('location: index.php?page=drivers');
	}

    if (isset($_GET['editDriver'])) {
		$id = $_GET['editDriver'];
		$record = mysqli_query($con, "SELECT * FROM drivers WHERE id=$id");
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
            $fname = $n['fname'];
            $lname = $n['lname'];
            $gender = $n['gender'];
            $contact = $n['contact'];
            $address = $n['address'];
		}
	}

    if (isset($_POST['updateDriver'])) {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
    
        mysqli_query($con, "UPDATE drivers SET fname='$fname', lname='$lname', gender='$gender', contact='$contact', address='$address' WHERE id=$id");
        $_SESSION['message'] = "Driver updated!"; 
        header('location: index.php?page=driver');
    }

    if (isset($_GET['delDriver'])) {
        $id = $_GET['delDriver'];
        mysqli_query($con, "DELETE FROM drivers WHERE id=$id");
        $_SESSION['message'] = "Driver deleted!";
        header('location: index.php?page=drivers');
    }
?>