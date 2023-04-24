
<?php session_start(); ?>


<?php

include '../include/header.php';

?>
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header px-4 py-3">
                        <h3>PHP-CRUD <a href="add_user.php" class="btn btn-dark float-end">Add User</a></h3>

                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="bg-info text-center">
                                        <th scope="col">SI.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'crud_db');
                        $qry = "SELECT * FROM user_tbl";
                        $fetch_qry = mysqli_query($conn, $qry);

                        if (mysqli_num_rows($fetch_qry) > 0) {
                            $i = 0;

                            foreach ($fetch_qry as $data) {
                                $i++;
                                // echo $data['email'];
                                ?>
                                  <tr class="">
                                        <td scope="row"><?php echo $i;?></td>
                                        <td><?php echo $data['name']?></td>
                                        <td><?php echo $data['email']?></td>
                                        <td><?php echo $data['phone']?></td>
                                        <td><?php echo $data['gender']?></td>
                                        <td><?php echo $data['address']?></td>
                                       
                                        <td class="text-center"><a href="edit.php?id=<?php echo $data['id']; ?>"
                                                class="btn btn-sm bg-warning text-light">Edit</a></td>
                                        <td class="text-center"><a href="./operations/update_code.php?delete_id=<?php echo $data['id'];?>"
                                                class="btn btn-sm bg-danger text-light">Delete</a></td>
                                                


                                    </tr>
                                
                                <?php

                            }
                        }


                        ?>
                                  
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




</main>



<?php

include '../include/footer.php';

?>