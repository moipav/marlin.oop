<?php include 'header.php'?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <a href="#" class="btn btn-success">add post</a>
                <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <th scope="row"><?=$post['id']?></th>
                        <td><?=$post['title']?></td>
                        <td><?=$post['post']?></td>
                        <td>
                            <a href="#" class="btn btn-warning">edit</a>
                            <a href="#" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
