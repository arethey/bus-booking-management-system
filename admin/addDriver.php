<div class="card shadow w-100 m-auto" style="max-width: 600px">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <span>New Driver</span>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form mb-3">
                        <input type="text" class="form__input" id="fname" name="fname" placeholder=" " />
                        <label for="fname" class="form__label">First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form mb-3">
                        <input type="text" class="form__input" id="lname" name="lname" placeholder=" " />
                        <label for="lname" class="form__label">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="form mb-3">
                <!-- <input type="text" class="form__input" id="gender" name="gender" placeholder=" " /> -->
                <select id="gender" name="gender" class="form__select">
                    <option selected>Male</option>
                    <option>Female</option>
                </select>
                <label for="gender" class="form__label">Gender</label>
            </div>
            <div class="form mb-3">
                <input type="number" class="form__input" id="contact" name="contact" placeholder=" " />
                <label for="contact" class="form__label">Contact</label>
            </div>
            <div class="form mb-3">
                <input type="text" class="form__input" id="address" name="address" placeholder=" " />
                <label for="address" class="form__label">Address</label>
            </div>

            <div>
                <a href="index.php?page=drivers" class="btn btn-link">Cancel</a>
                <button type="submit" class="btn btn-primary" name="saveDriver">Save</button>
            </div>
        </form>
    </div>
</div>