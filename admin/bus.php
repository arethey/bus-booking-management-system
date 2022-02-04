<div class="card shadow">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <span>Manage Bus</span>
            <a href="index.php?page=addBus" class="btn btn-primary btn-sm">New Bus</a>
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

        <?php $results = mysqli_query($con, "SELECT * FROM bus"); ?>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Bus Name</th>
                    <th scope="col">Bus Number</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['bus_name']; ?></td>
                <td><?php echo $row['bus_number']; ?></td>
                <td>
                    <a href="index.php?page=editBus&editBus=<?php echo $row['id']; ?>"
                        class="btn btn-sm btn-warning mr-1">Edit</a>
                    <a href="index.php?delBus=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>