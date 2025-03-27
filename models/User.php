<?php

class User extends Model {
    public function checkUsername($username) {
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result()->num_rows > 0;
    }
    
    public function checkEmail($email) {
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->num_rows > 0;
    }
    public function register($email, $username, $password) {
        $stmt = $this->conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bind_param("sss", $email, $username, $hash);
        return $stmt->execute();
    }
    public function login($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 0) return null;
    
        $user = $result->fetch_assoc();
        if (!password_verify($password, $user['password'])) return false;
    
        return $user;
    }
    public function getAllUsers() {
        $stmt = $this->conn->prepare("SELECT id, username, email, created_at FROM users ORDER BY id ASC");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    
    public function deleteById($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
    
}
