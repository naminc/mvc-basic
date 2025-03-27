<!DOCTYPE html>
<html lang="vi" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Website của bạn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css?v=<?= time() ?>">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="/">🛒 NAMINC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        Sản phẩm
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/Product/index">Tất cả sản phẩm</a></li>
        <li><a class="dropdown-item" href="/Category/index">Danh mục</a></li>
        <li><a class="dropdown-item" href="/Product/add">Thêm sản phẩm</a></li>
    </ul>
</li>
                
                <li class="nav-item"><a class="nav-link" href="/cart/index">Giỏ hàng</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-outline-light" id="themeToggleBtn" onclick="toggleTheme()" title="Chuyển nền">
                         <i class="bi bi-moon-fill" id="themeIcon"></i>
                        </button>
                    </li>
                <?php if (!empty($_SESSION['user'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                            <img src="https://i.pravatar.cc/150?u=<?= $_SESSION['user']['username'] ?>" class="avatar-circle">
                            <?= $_SESSION['user']['username'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#userModal">Thông tin cá nhân</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="/auth/logout">Đăng xuất</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="/auth/login">Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="/auth/register">Đăng ký</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Modal Thông tin cá nhân -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông tin người dùng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tên đăng nhập:</strong> <?= $_SESSION['user']['username'] ?></p>
                    <p><strong>Email:</strong> <?= $_SESSION['user']['email'] ?? '---' ?></p>
                    <p><strong>Tham gia từ:</strong> <?= $_SESSION['user']['created_at'] ?? '---' ?></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">

