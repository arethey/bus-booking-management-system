<div class="card shadow">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <span>Manage Drivers</span>
            <a href="index.php?page=addDriver" class="btn btn-primary btn-sm">New Driver</a>
        </div>
    </div>
    <div class="card-body">
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success" role="alert">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>

        <?php $results = mysqli_query($con, "SELECT * FROM drivers"); ?>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Address</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <a href="index.php?page=editDriver&editDriver=<?php echo $row['id']; ?>"
                        class="btn btn-sm btn-warning mr-1">Edit</a>
                    <a href="index.php?delDriver=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>