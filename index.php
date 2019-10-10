<?php
include_once "header.php";
include_once "connection.php";
$sql = mysqli_query($connect, "SELECT * FROM tbl_users");
?>
<div class="container">
<a href="insert.php" class="btn btn-success">Add New</a>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                <?php
                foreach ($sql as $info) {
                    ?>
                    <tr>
                        <td><?php echo $info['id']; ?></td>
                        <td><?php echo $info['username']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $info['id']?>" class="btn btn-success">Edit</a>
                            <a href="delete.php?id=<?php echo $info['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    <?php
                    }
                    ?>
                    </tr>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>