<?php

class App {
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Controller
        if (!empty($url[0])) {
            $controllerName = ucfirst($url[0]) . 'Controller';
            $controllerFile = 'controllers/' . $controllerName . '.php';
        
            if (file_exists($controllerFile)) {
                $this->controller = $controllerName;
                unset($url[0]);
            } else {
                $this->loadError(); // 👈 gọi trang lỗi nếu controller không tồn tại
                return;
            }
        }        
        require_once 'controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Action (method)
        if (!empty($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            } else {
                $this->loadError(); // 👈 gọi trang lỗi nếu method không tồn tại
                return;
            }
        }
        

        // Params
        $this->params = array_values($url);

        // Gọi hàm controller::action với tham số
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
    private function loadError() {
        require_once 'controllers/ErrorController.php';
        $error = new ErrorController();
        $error->notFound();
    }
}
