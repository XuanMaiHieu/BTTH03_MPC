<!DOCTYPE html>
<html>
<head>
    <title>Article List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBK2UABT4KIVLl5Oz1Nl9/jOrnZb1MU+dX4ePqHs3I9foEMyJ1k7b5D/xD" crossorigin="anonymous">
</head>
<body>
<h1>Article List</h1>

<a href="index.php?controller=article&action=create">Create Article</a>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?php echo $article['id']; ?></td>
            <td><?php echo $article['title']; ?></td>
            <td>
                <a href="index.php?controller=article&action=edit&id=<?php echo $article['id']; ?>">Edit</a>
                <a href="index.php?controller=article&action=delete&id=<?php echo $article['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iNl7lqyi8U5HR3kA12KO4P1foFhMShGmeCqF5iJqj8B+5AXdTEK1OQT5f" crossorigin="anonymous"></script>
</body>
</html>
