<div class="card shadow w-100 m-auto" style="max-width: 500px">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <span>Edit Bus</span>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form mb-3">
                <input type="text" class="form__input" id="bus_name" name="bus_name" placeholder=" "
                    value="<?php echo $bus_name; ?>" />
                <label for="bus_name" class="form__label">Bus Name</label>
            </div>
            <div class="form mb-3">
                <input type="text" class="form__input" id="bus_number" name="bus_number" placeholder=" "
                    value="<?php echo $bus_number; ?>" />
                <label for="bus_number" class="form__label">Bus Number</label>
            </div>
            <div>
                <a href="index.php?page=bus" class="btn btn-link">Cancel</a>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
        </form>
    </div>
</div>