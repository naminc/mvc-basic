<?php require_once 'views/layouts/header.php'; ?>

<div class="page-content">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card shadow p-4">
            <h3 class="text-center mb-4">Đăng nhập</h3>

            <?php if (!empty($data['success'])): ?>
                <div class="alert alert-success"><?= $data['success'] ?></div>
            <?php endif; ?>

            <?php if (!empty($data['error'])): ?>
                <div class="alert alert-danger"><?= $data['error'] ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input type="text" placeholder="Tên đăng nhập" name="username"
                           class="form-control <?= isset($data['errors']['username']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['old']['username'] ?? '' ?>" required>
                    <?php if (!empty($data['errors']['username'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['username'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" placeholder="Mật khẩu" name="password"
                           class="form-control <?= isset($data['errors']['password']) ? 'is-invalid' : '' ?>" required>
                    <?php if (!empty($data['errors']['password'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['password'] ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary w-100"><i class="bi bi-person-check-fill"></i> Đăng nhập</button>
            </form>

            <div class="mt-3 text-center">
                Chưa có tài khoản? <a href="/auth/register" style="text-decoration: none;">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>
