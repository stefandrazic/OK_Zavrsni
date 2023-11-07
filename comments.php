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