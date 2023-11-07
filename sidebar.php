<?php
$sql4 = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 3";
$posts5 = getData($sql4, $connection, $fetchAll = true);
?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
        <ol class="list-unstyled">
            <?php foreach ($posts5 as $post) { ?>
                <li>
                    <a href="single-post.php?post_id=<?php echo ($post['id']) ?>">
                        <?= $post['title'] ?>
                    </a>
                </li>
            <?php } ?>
        </ol>
    </div>
</aside>