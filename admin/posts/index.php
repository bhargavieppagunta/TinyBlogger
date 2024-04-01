<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <title>Admin Section - Manage Posts</title>
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        
        <!-- Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage Posts</h2>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>iPhone 15, iPhone 15 Pro launched with new camera, titanium frame</td>
                                <td>Bhargavi</td>
                                <td><a href="edit.php" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="" class="unpublish">unpublish</a></td>
                                <td><a href="" class="publish">publish</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>iPhone 15, iPhone 15 Pro launched with new camera, titanium frame</td>
                                <td>Nithin</td>
                                <td><a href="edit.php" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="" class="unpublish">unpublish</a></td>
                                <td><a href="" class="publish">publish</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>iPhone 15, iPhone 15 Pro launched with new camera, titanium frame</td>
                                <td>Sahithi</td>
                                <td><a href="edit.php" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="" class="unpublish">unpublish</a></td>
                                <td><a href="" class="publish">publish</a></td>
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