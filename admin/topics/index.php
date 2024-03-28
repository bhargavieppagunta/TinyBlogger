<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <title>Admin Section - Manage Topics</title>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        
        <!-- Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage Topic</h2>
                <table>
                    <thead>
                        <th>S.No</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Technology</td>
                                <td><a href="#" class="edit">Edit</a></td>
                                <td><a href="#" class="delete">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sports</td>
                                <td><a href="#" class="edit">Edit</a></td>
                                <td><a href="#" class="delete">Delete</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- // Admin Content-->


    </div>
    <!-- //Page Wrapper -->


    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--Custom Script-->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>