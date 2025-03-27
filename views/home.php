<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-4 text-center">
    <div class="card p-4 shadow-sm">
        <h2 class="mb-3">Chào mừng, <span class="text-primary"><?= $_SESSION['user']['username'] ?></span>!</h2>
        <p class="lead">Bạn đã đăng nhập thành công vào hệ thống.</p>
        <div class="text-center">
            <a href="/auth/logout" class="btn btn-outline-danger mt-3 d-inline-block"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a>
        </div>
    </div>
    <!-- Table danh sách tài khoản -->
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 mt-3">
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-primary text-white">
                <strong>Danh sách tài khoản</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data['users'])): ?>
                                <?php foreach ($data['users'] as $user): ?>
                                    <tr>
                                        <td><?= $user['id'] ?></td>
                                        <td><?= htmlspecialchars($user['username']) ?></td>
                                        <td><?= htmlspecialchars($user['email']) ?></td>
                                        <td><?= date('d/m/Y', strtotime($user['created_at'])) ?></td>
                                        <td>
                                            <form action="/user/delete" method="post" onsubmit="return confirm('Bạn có chắc muốn xoá tài khoản này?');">
                                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4">Không có tài khoản nào.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>