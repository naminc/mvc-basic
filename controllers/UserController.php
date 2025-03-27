<?php

class UserController extends Controller {

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            $userId = intval($_POST['id']);
            $userModel = $this->model('User');
            $userModel->deleteById($userId);
            header("Location: /home");
            exit;
        }
        header("Location: /home");
        exit;
    }
}
