<?php
	$bus_name = "";
	$bus_number = "";

	if (isset($_POST['saveBus'])) {
		$bus_name = $_POST['bus_name'];
		$bus_number = $_POST['bus_number'];

		mysqli_query($con, "INSERT INTO bus (bus_name, bus_number) VALUES ('$bus_name', '$bus_number')"); 
		$_SESSION['message'] = "Bus saved"; 
		header('location: index.php?page=bus');
	}

    if (isset($_GET['editBus'])) {
		$id = $_GET['editBus'];
		$record = mysqli_query($con, "SELECT * FROM bus WHERE id=$id");
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$bus_name = $n['bus_name'];
			$bus_number = $n['bus_number'];
		}
	}

    if (isset($_POST['updateBus'])) {
        $id = $_POST['id'];
        $bus_name = $_POST['bus_name'];
        $bus_number = $_POST['bus_number'];
    
        mysqli_query($con, "UPDATE bus SET bus_name='$bus_name', bus_number='$bus_number' WHERE id=$id");
        $_SESSION['message'] = "Bus updated!"; 
        header('location: index.php?page=bus');
    }

    if (isset($_GET['delBus'])) {
        $id = $_GET['delBus'];
        mysqli_query($con, "DELETE FROM bus WHERE id=$id");
        $_SESSION['message'] = "Bus deleted!";
        header('location: index.php?page=bus');
    }
?>