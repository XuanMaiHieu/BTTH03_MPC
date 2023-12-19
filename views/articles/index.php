<!DOCTYPE html>
<html>
<head>
    <title>Article List</title>
    <!-- Đường link đến thư viện Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Article List</h1>
    <a href="index.php?controller=article&action=create" class="btn btn-primary mb-3">Create Article</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $articles = $articles ?? [];

            if (is_array($articles) || is_object($articles)) {
                foreach ($articles as $article) {
                    ?>
                    <tr>
                        <td><?php echo $article['id']; ?></td>
                        <td><?php echo $article['title']; ?></td>
                        <td>
                            <a href="index.php?controller=article&action=edit&id=<?php echo $article['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="index.php?controller=article&action=delete&id=<?php echo $article['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>   
                    </tr>
                    <?php
                }
                
            } else {
                // Xử lý khi biến không phải là mảng hoặc đối tượng
                echo "<tr><td colspan='3'>Dữ liệu không tồn tại hoặc không hợp lệ.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<!-- Đường link đến thư viện Bootstrap JS (tùy chọn) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
