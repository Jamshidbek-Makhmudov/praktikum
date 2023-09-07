
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        PHP Complete CRUD Application
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit User Information</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>



        <div class="container d-flex justify-content-center" >
            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $category->name ?>">
                    </div>

<!--                    <div class="col">-->
<!--                        <label class="form-label">Last Name:</label>-->
<!--                        <input type="text" class="form-control" name="last_name" value="--><?php //echo $item['last_name'] ?><!--">-->
<!--                    </div>-->
                </div>

<!--                <div class="mb-3">-->
<!--                    <label class="form-label">Email:</label>-->
<!--                    <input type="email" class="form-control" name="email" value="--><?php //echo $item['email'] ?><!--">-->
<!--                </div>-->

                <div class="mb-3">
                    <label class="form-label">Image:</label>
                    <input class="form-control" type="file" name="image" value="" />
                </div>



                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="/dars.loc/index.php/category/list" class="btn btn-danger">Home</a>
                </div>
            </form>
        </div>

    </div>

