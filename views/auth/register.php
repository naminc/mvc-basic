<?php require_once 'views/layouts/header.php'; ?>

<div class="page-content">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card shadow p-4">
            <h3 class="text-center mb-4">Đăng ký tài khoản</h3>

            <?php if (!empty($data['errors']['general'])): ?>
                <div class="alert alert-danger"><?= $data['errors']['general'] ?></div>
            <?php endif; ?>

            <?php if (!empty($data['success'])): ?>
                <div class="alert alert-success"><?= $data['success'] ?></div>
            <?php endif; ?>

            <form method="post">
                <!-- Username -->
                <div class="mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input type="text" name="username"
                           class="form-control <?= isset($data['errors']['username']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['old']['username'] ?? '' ?>"
                           placeholder="Tên đăng nhập" required>
                    <?php if (!empty($data['errors']['username'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['username'] ?></div>
                    <?php endif; ?>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email"
                           class="form-control <?= isset($data['errors']['email']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['old']['email'] ?? '' ?>"
                           placeholder="Email" required>
                    <?php if (!empty($data['errors']['email'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['email'] ?></div>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="password"
                           class="form-control <?= isset($data['errors']['password']) ? 'is-invalid' : '' ?>"
                           placeholder="Mật khẩu" required>
                    <?php if (!empty($data['errors']['password'])): ?>
                        <div class="invalid-feedback"><?= $data['errors']['password'] ?></div>
                    <?php endif; ?>
                </div>
                    <button type="submit" class="btn btn-primary w-100"><i class="bi bi-person-plus-fill"></i> Đăng ký</button>
            </form>

            <div class="mt-3 text-center">
                Đã có tài khoản? <a href="/auth/login" class="text-decoration-none">Đăng nhập ngay</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>
