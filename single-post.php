<?php include('db.php') ?>

<?php include('header.php') ?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">

            <!-- /.blog-post -->
            <?php
            if (isset($_GET['post_id'])) {

                // pripremamo upit
                $sql1 = "SELECT * FROM posts p WHERE p.id = {$_GET['post_id']}";
                $post = getData($sql1, $connection, $fetchAll = false);

                $sql2 = "SELECT * FROM comments c WHERE c.post_id = {$_GET['post_id']}";
                $comments = getData($sql2, $connection, $fetchAll = true);

                // koristite var_dump kada god treba da proverite sadrzaj neke promenjive
                // echo '<pre>';
                // var_dump($comments);
                // echo '</pre>';
                ?>
                <?php
            } else {
                echo ('post_id nije prosledjen kroz $_GET');
            }
            ?>

            <div class="blog-post">
                <a href="single-post.php?post_id=<?php echo ($post['id']) ?>">
                    <h2 class="blog-post-title">
                        <?php echo ($post['title']) ?>
                    </h2>
                </a>
                <p class="blog-post-meta">
                    <?php echo ($post['created_at']) ?> <a href="#">
                        <?php echo ($post['author']) ?>
                    </a>
                </p>

                <p>
                    <?= $post['body'] ?>
                </p>
            </div>
            <div class="comments">
                <hr>
                <h3>Comments</h3>
                <ul>
                    <?php foreach ($comments as $comment) { ?>
                        <li>
                            <h4>
                                <?= $comment['author'] ?>
                            </h4>
                            <?= $comment['text'] ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <!-- /.blog-main -->

        <?php include('sidebar.php') ?>

        <!-- /.blog-sidebar -->
    </div>
    <!-- /.row -->
</main>
<!-- /.container -->
<?php include('footer.php') ?>