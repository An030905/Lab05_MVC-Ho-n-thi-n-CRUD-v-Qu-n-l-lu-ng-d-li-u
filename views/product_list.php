<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên - Lab 5 MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Quản lý sinh viên</h4>
            <a href="index.php?page=product-add" class="btn btn-light btn-sm">
                <i class="bi bi-plus-lg"></i> Thêm sinh viên mới
            </a>
        </div>
        
        <div class="card-body">
            <form action="index.php" method="GET" class="d-flex mb-4">
                <input type="hidden" name="page" value="product-list">
                <input type="text" name="search" class="form-control me-2" 
                       placeholder="Tìm kiếm theo tên..." 
                       value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                <button type="submit" class="btn btn-outline-primary">
                    <i class="bi bi-search"></i> Tìm
                </button>
                <?php if(!empty($_GET['search'])): ?>
                    <a href="index.php?page=product-list" class="btn btn-outline-secondary ms-2">Xóa lọc</a>
                <?php endif; ?>
            </form>

            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th style="width: 80px;">ID</th>
                        <th>Họ tên</th>
                        <th>Mã SV</th>
                        <th>Email</th>
                        <th style="width: 180px;">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $p): ?>
                        <tr>
                            <td class="text-center"><?= $p['id'] ?></td>
                            <td><strong><?= htmlspecialchars($p['fullname']) ?></strong></td>
                            <td class="text-center"><?= htmlspecialchars($p['student_code']) ?></td>
                            <td><?= htmlspecialchars($p['email']) ?></td>
                            <td class="text-center">
                                <a href="index.php?page=product-detail&id=<?= $p['id'] ?>" class="btn btn-info btn-sm text-white" title="Xem">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="index.php?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm text-white" title="Sửa">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="index.php?page=product-delete&id=<?= $p['id'] ?>" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?')" title="Xóa">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">Không tìm thấy sinh viên nào phù hợp.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div class="card-footer text-end text-muted">
            <small>Lab 5 - Model View Controller | Tổng số: <?= count($products) ?></small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>