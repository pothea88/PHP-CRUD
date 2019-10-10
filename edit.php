<?php
    include_once "connection.php";
    include_once "header.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_users WHERE id = $id";
    $data = mysqli_query($connect,$query);
?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header"><h4>Edit Info</h4></div>
                <div class="card-body">
                    <?php
                        foreach($data as $row) {
                    ?>
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="<? echo $row['id'] ?>">
                        <div class="form-group">
                            <label for="username">Username:</label><br>
                            <input type="text" name="username"
                             class="form-control" value="<?php echo $row['username']?>">
                        </div>
                        <div class="form-group">
                            <label for="Password">New Password:</label><br>
                            <input type="password" name="password" 
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="set" value="Edit Info" class="form-control btn btn-success">
                        </div>
                    </form>
                    <?php
                        
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<?php
    if(isset($_POST['set'])) {
        $username = $_POST['username'];
        $newpass = $_POST['password'];
        $update = "UPDATE tbl_users SET username='$username', passwords='$newpass' WHERE id=$id";
        $result = mysqli_query($connect, $update);
        if($result == true) {
            header("Location:index.php");
        }else {
            echo "Cannot edit";
        }
    }
?>
