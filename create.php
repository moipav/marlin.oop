<?php
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/store.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                    <label for="Post">Post</label>
                    <input type="text" name="post" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
