<?php include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else {
    $posts = getPublishedPosts();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custume Styling -->
    <link rel="stylesheet" href="assets/css/style.css"> 
    <title>Blog</title>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!--Content-->
        <div class="content clearfix">
            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle ?> </h1>
                <?php 
                $i = 0;
                foreach ($posts as $post) : ?>
                
                <?php if ($i++ > 3) break; ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="post-image" alt="">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                            <i class="far fa-user">&nbsp;<?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far fa-calendar">&nbsp;<?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($post['body'], 0, 120) . '...'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- //Main Content -->
            <div class="sidebar">
               
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] .'&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
        <!-- //Content -->
    </div>
    <!-- //Page Wrapper -->
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
</body>
</html>