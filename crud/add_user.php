<?php

include '../include/header.php';

?>
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header px-4 py-3">
                        <h3>PHP-CRUD <a href="user_list.php" class="btn btn-dark float-end px-3 fw-bold">Back</a></h3>

                    </div>
                    <div class="card-body">
                        <form action="./operations/add_code.php" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="name"
                                    aria-describedby="helpId" required>   
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="email@gmail.com"
                                    aria-describedby="helpId" required>   
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="number" name="number" id="" class="form-control" placeholder="phone"
                                    aria-describedby="helpId" required>   
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label pe-3">Gender</label>
                                <input type="radio" name="gender" value="male"id="" placeholder=""
                                    aria-describedby="helpId" required> Male  
                                <input type="radio" name="gender" value="Female" id="" placeholder=""
                                    aria-describedby="helpId" required> Female  
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                  <textarea class="form-control" name="address" id="" rows="3" placeholder="address" required></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
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