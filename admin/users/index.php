<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <title>Admin Section - Manage Users</title>
</head>
<body>
    
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        
        <!-- Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage User</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage Users</h2>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bhargavi</td>
                                <td>bhargavi@gmail.com</td>
                                <td><a href="edit.php" class="edit">edit</a></td>
                                <td><a href="" class="delete">delete</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Bhargavi</td>
                                <td>bhargavi@gmail.com</td>
                                <td><a href="edit.php" class="edit">edit</a></td>
                                <td><a href="" class="delete">delete</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Bhargavi</td>
                                <td>bhargavi@gmail.com</td>
                                <td><a href="edit.php" class="edit">edit</a></td>
                                <td><a href="" class="delete">delete</a></td>
                            </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- // Admin Content-->
    </div>
    <!-- //Page Wrapper -->
</body>
</html>