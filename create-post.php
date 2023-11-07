<?php include("db.php"); ?>
<?php include("header.php"); ?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <form action="create.php" method="post" onsubmit="return validatePostForm();">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea class="form-control" id="body" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label for="author">Author id:</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    <!-- /.row -->
</main>
<?php include("footer.php"); ?>