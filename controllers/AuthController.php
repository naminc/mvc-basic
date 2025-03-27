<?php

class AuthController extends Controller {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = $_POST['password'];
            $errors = [];
            if (empty($username)) {
                $errors['username'] = 'Vui lòng nhập tên đăng nhập!';
            }
            if (empty($password)) {
                $errors['password'] = 'Vui lòng nhập mật khẩu!';
            }
            if (strlen($username) < 6 || strlen($username) > 32) {
                $errors['username'] = 'Tên đăng nhập phải từ 6 đến 32 ký tự!';
            }
            if (strlen($password) < 6 || strlen($password) > 32) {
                $errors['password'] = 'Mật khẩu phải từ 6 đến 32 ký tự!';
            }
            if (empty($errors)) {
                $userModel = $this->model('User');
                $result = $userModel->login($username, $password);
                if (!$result) {
                    $error = 'Tài khoản hoặc mật khẩu không chính xác!';
                } else {
                    if (session_status() === PHP_SESSION_NONE) session_start();
                    $_SESSION['user'] = $result;
                    header("Location: /home");
                    exit;
                }
            }
    
            $this->view("auth/login", [
                'errors' => $errors,
                'error' => $error ?? null,
                'old' => ['username' => $username]
            ]);
            return;
        }
    
        if (session_status() === PHP_SESSION_NONE) session_start();
        $success = $_SESSION['success'] ?? null;
        unset($_SESSION['success']);
    
        $this->view("auth/login", ['success' => $success]);
    }
    

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $userModel = $this->model('User');
            $errors = [];
            if ($userModel->checkUsername($username)) {
                $errors['username'] = 'Tên đăng nhập đã tồn tại!';
            }
            if ($userModel->checkEmail($email)) {
                $errors['email'] = 'Email đã được sử dụng bởi tài khoản khác!';
            }
            if (strlen($username) < 6 || strlen($username) > 32) {
                $errors['username'] = 'Tên đăng nhập phải từ 6 đến 32 ký tự!';
            }
            if (strlen($password) < 6 || strlen($password) > 32) {
                $errors['password'] = 'Mật khẩu phải từ 6 đến 32 ký tự!';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không hợp lệ!';
            }
            if (!empty($errors)) {
                $this->view("auth/register", [
                    'errors' => $errors,
                    'old' => ['username' => $username, 'email' => $email]
                ]);
                return;
            }
            if ($userModel->register($email, $username, $password)) {
                if (session_status() === PHP_SESSION_NONE) session_start();
                $_SESSION['success'] = 'Đăng ký thành công! Vui lòng đăng nhập.';
                header("Location: /auth/login");
                exit;
            } else {
                $this->view("auth/register", [
                    'errors' => ['general' => 'Đăng ký thất bại!'],
                    'old' => ['username' => $username, 'email' => $email]
                ]);
                return;
            }
        }

        $this->view("auth/register");
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        session_destroy();
        header("Location: /auth/login");
        exit;
    }
}
