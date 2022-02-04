<div class="card shadow w-100 m-auto" style="max-width: 500px">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <span>New Bus</span>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form mb-3">
                <input type="text" class="form__input" id="bus_name" name="bus_name" placeholder=" " />
                <label for="bus_name" class="form__label">Bus Name</label>
            </div>
            <div class="form mb-3">
                <input type="text" class="form__input" id="bus_number" name="bus_number" placeholder=" " />
                <label for="bus_number" class="form__label">Bus Number</label>
            </div>

            <div>
                <a href="index.php?page=bus" class="btn btn-link">Cancel</a>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
        </form>
    </div>
</div>