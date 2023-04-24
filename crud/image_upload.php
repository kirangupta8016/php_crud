<?php session_start(); ?>


<?php

include '../include/header.php';

?>
<main>
    <div class="container mt-5 ">
        <div class="row mt-5">
            <div class="col-lg-8 offset-2">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h1 class="text-white p-3">Image Upload</h1>

                    </div>
                    <div class="card-body">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="" placeholder="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="" placeholder="email@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="number" class="form-control" name="number" id="" placeholder="number" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">File</label>
                                <input type="file" class="form-control" name="file" id="" required>
                            </div>
                            <input name="save" id="" class="btn btn-primary" type="submit" value="Save">

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>



<?php

include '../include/footer.php';

?>