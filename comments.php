<?php $postId = $_GET['post_id']; ?>
<div class="comments">
    <h3>Dodajte svoj komentar</h3>
    <form action="create-comment.php" method="post" onsubmit="return validateCommentForm();">
        <div class="form-group">
            <label for="author">Vaše ime:</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="text">Vaš komentar:</label>
            <textarea name="text" id="text" class="form-control" rows="4"></textarea>
        </div>
        <input type="hidden" name="post_id" value="<?= $postId ?>">
        <button type="submit" class="btn btn-primary">Dodaj komentar</button>
    </form>
    <hr>
    <button class="btn btn-default" id="comments-btn">Hide comments</button>
    <h3>Comments</h3>
    <ul id="comments-list">
        <?php foreach ($comments as $comment) { ?>
            <li class="comment">
                <h4>
                    <?= $comment['author'] ?>
                </h4>
                <?= $comment['text'] ?>
                <button class="btn btn-default"><a
                        href="delete-comment.php?post_id=<?= $postId ?>&id=<?= $comment['id'] ?>">Delete</a></button>
            </li>
        <?php } ?>
    </ul>
</div>