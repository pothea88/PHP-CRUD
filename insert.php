<?php 
    include_once "connection.php";
    include_once "header.php";
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $query = mysqli_query($connect, "INSERT INTO tbl_users(username, passwords) 
        VALUES('$username','$password')");
        if ($query === true) {
            header("Location:index.php");
        }else {
            echo ("not success");
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header"><h4>Add New</h4></div>
                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label><br>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password:</label><br>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>