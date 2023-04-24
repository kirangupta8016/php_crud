<?php

include '../include/header.php';

?>
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header px-4 py-3">
                        <h3>Edit-Details <a href="user_list.php" class="btn btn-dark float-end px-3 fw-bold">Back</a></h3>

                    </div>
                    <div class="card-body">


                    <?php
                    $conn = mysqli_connect('localhost','root','','crud_db');

                    $id = $_GET['id'];

                    $update_qry ="SELECT * FROM user_tbl WHERE id =$id";
                    $update_qry_run =mysqli_query($conn,$update_qry);

                    if(mysqli_num_rows($update_qry_run)> 0){

                        $data = mysqli_fetch_assoc($update_qry_run);
                        // echo $data['address'];

                        ?>
                        
                        <form action="./operations/update_code.php" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" id="" value="<?= $data['name'];?>" class="form-control" placeholder="name"
                                    aria-describedby="helpId" required> 
                                    <input type="hidden" name="update_id" value="<?= $data['id'];?>"class="form-control" placeholder="name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" value="<?= $data['email'];?>" id="" class="form-control" placeholder="emial"
                                    aria-describedby="helpId" required>   
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="number" name="number" value="<?= $data['phone'];?>" id="" class="form-control" placeholder="phone"
                                    aria-describedby="helpId" required>   
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label pe-3">Gender</label>
                                <input type="radio" name="gender" value="male"id="" <?= ($data['gender']) == 'male' ? 'checked':'' ?> placeholder=""
                                    aria-describedby="helpId" required> Male  
                                <input type="radio" name="gender" value="female" id=""  <?= ($data['gender']) == 'female' ? 'checked':'' ?> placeholder=""
                                    aria-describedby="helpId" required> Female  
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                  <textarea class="form-control"name="address" id="" rows="3" placeholder="address" required><?= $data['address'];?></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" name="update" value="Update">
                        </form>
   
                        
                        
                        <?php
                    }
                    
                    else{
                        echo "No data found";
                    }
                    
                    ?>
                        
                                       
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>



<?php

include '../include/footer.php';

?>