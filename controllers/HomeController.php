<?php

class HomeController extends Controller {
    public function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header("Location: /auth/login");
            exit;
        }
        $userModel = $this->model('User');
        $users = $userModel->getAllUsers();
        $this->view('home', ['users' => $users]);
    }
}

