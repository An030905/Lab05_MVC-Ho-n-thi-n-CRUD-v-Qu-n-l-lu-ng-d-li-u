<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card mx-auto" style="width: 35rem;">
        <div class="card-header bg-success text-white">
            <h3>Thêm sinh viên mới</h3>
        </div>
        <div class="card-body">
            <form action="index.php?page=product-store" method="POST">
                <div class="mb-3">
                    <label class="form-label">Họ tên</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mã SV</label>
                    <input type="text" name="student_code" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Lưu lại</button>
                <a href="index.php?page=product-list" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
</body>
</html>