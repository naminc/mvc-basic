<!DOCTYPE html>
<html lang="vi" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Đăng Nhập</title>

    <!-- Bootstrap CSS từ CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">

    <!-- jQuery và DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        /* Tăng khoảng cách cho form đăng nhập */
        .row.justify-content-center {
            margin-top: 7rem !important; /* Tăng margin-top */
            padding-top: 3rem !important; /* Tăng padding-top */
        }
        /* Tạo khoảng cách cho navbar-brand */
        .navbar-brand {
            margin-left: 1.5rem; /* Cách mép trái 1.5rem (khoảng 24px) */
        }
        /* Tùy chỉnh khoảng cách giữa hai nút */
        .auth-buttons .btn {
            margin-left: 0.5rem; /* Khoảng cách giữa hai nút */
        }
        /* Card cho DataTable */
        .data-table-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <!-- Navbar cố định với dropdown -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NAMINC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Dịch vụ
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dịch vụ 1</a></li>
                            <li><a class="dropdown-item" href="#">Dịch vụ 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Dịch vụ khác</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
                <!-- Hai nút Đăng ký và Đăng nhập -->
                <div class="auth-buttons d-flex">
                    <a href="#" class="btn btn-primary">Đăng ký</a>
                    <a href="#" class="btn btn-primary">Đăng nhập</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Nội dung chính với form đăng nhập -->
    <main class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h3 class="text-center mb-4">Đăng nhập</h3>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="username" 
                                   placeholder="Nhập tên đăng nhập">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" 
                                   placeholder="Nhập mật khẩu">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Ghi nhớ tôi</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- DataTable trong card -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="data-table-card">
                    <h3 class="text-center mb-4">Danh sách người dùng</h3>
                    <table id="exampleTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Ngày đăng ký</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nguyễn Văn A</td>
                                <td>a@example.com</td>
                                <td>2025-03-27</td>
                            </tr>
                            <tr>
                                <td>Trần Thị B</td>
                                <td>b@example.com</td>
                                <td>2025-03-26</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p>© 2025 Bản quyền thuộc về Công ty. Mọi quyền được bảo lưu.</p>
        </div>
    </footer>

    <!-- Bootstrap JS từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>

    <!-- Khởi tạo DataTable -->
    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });
    </script>
</body>
</html>