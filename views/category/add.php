
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Add new Products here
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Albert" required/>
                    </div>

<!--                    <div class="col">-->
<!--                        <label class="form-label">Last Name:</label>-->
<!--                        <input type="text" class="form-control" name="last_name" placeholder="Einstein">-->
<!--                    </div>-->
                </div>


                <div class="mb-3">
                    <label class="form-label">Image:</label>
                    <input class="form-control" type="file" name="image" />

                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="/dars.loc/index.php/category/list" class="btn btn-danger">Home</a>
                </div>
            </form>
        </div>
    </div>
