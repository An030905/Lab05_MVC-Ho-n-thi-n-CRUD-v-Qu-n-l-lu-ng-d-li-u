<!DOCTYPE html>
<html>
<head>
    <title>Sửa sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card mx-auto" style="width: 35rem;">
        <div class="card-header bg-warning">
            <h3>Chỉnh sửa thông tin sinh viên</h3>
        </div>
        <div class="card-body">
            <form action="index.php?page=product-update" method="POST">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                
                <div class="mb-3">
                    <label class="form-label">Họ tên</label>
                    <input type="text" name="fullname" class="form-control" value="<?= htmlspecialchars($product['fullname']) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mã SV</label>
                    <input type="text" name="student_code" class="form-control" value="<?= htmlspecialchars($product['student_code']) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($product['email']) ?>" required>
                </div>
                
                <button type="submit" class="btn btn-warning">Cập nhật</button>
                <a href="index.php?page=product-list" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
</body>
</html>