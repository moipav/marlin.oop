<?php
$db = include 'db/start.php';
$id = $_GET['id'];
$post = $db->getOne('posts', $id);
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/update.php?id=<?=$post['id']?>" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="<?=$post['title']?>">
                    <label for="Post">Post</label>
                    <input type="text" name="post" class="form-control" value="<?=$post['post']?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-warning">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>