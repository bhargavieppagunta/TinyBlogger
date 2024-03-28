<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <title>Admin Section - Add Posts</title>
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
                <h2 class="page-title">Add Post</h2>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                    <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                                <option selected value="Technology">Technology</option>
                                <option value="Sports">Sports</option>
                        </select>
                    </div>
                    <div>
                            <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>

                    </div>

                    <button type="submit" name="add-post" class=" btn btn-big"><span>Add Post</span></button>
                </form>

            </div>
        </div>
        <!-- // Admin Content-->


    </div>
    <!-- //Page Wrapper -->
</html>