<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php 
    if(isset($_POST['submit'])){
        actions();
    }
?>
<?php include "includes/header.php" ?>

    <div class="container d-flex justify-content-center mb-5 mt-5">
        <h1>PASSWORD MANAGEMENT</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="w-50">
                    <form action="crud.php" method="post">
                        <div class="form-group mb-1">
                            <label for="username" >Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group mb-1">
                            <label for="username">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-1">
                            <select class="form-select" name="userId" id="id">
                                <?php
                                    $result = showAllData();
                                    while($userId = mysqli_fetch_assoc($result)){
                                        echo '<option value="'.$userId['id'].'">'.$userId['username'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-1">
                            <select class="form-select" name="action" id="">
                                <option value="delete">Delete</option>
                                <option value="update">Update</option>
                                <option value="add">ADD</option>
                            </select>
                        </div>
                        <div class="form-group mb-1">
                            <button type="submit" name="submit" value="SUBMIT" class="btn btn-warning"> SUBMIT </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $result = showAllData();
                            while($userId = mysqli_fetch_assoc($result)){
                                $users = '
                                            <tr>
                                                <th scope="row">'.$userId["id"].'</th>
                                                <td>'.$userId["username"].'</td>
                                                <td>'.$userId["password"].'</td>
                                            </tr>
                                        ';
                                echo $users;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include "includes/footer.php" ?>