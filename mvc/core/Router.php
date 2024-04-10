<?php 
class Router {
    
    function handleRouter(){
        global $router;
        unset($router['default_controller']);

    }
    private $routes = [];

    // Thêm một route
    public function addRoute($method, $path, $action) {
        $this->routes[$method][$path] = $action;
    }

    // Định tuyến yêu cầu
    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        
        foreach ($this->routes[$method] as $route => $action) {
            if (preg_match("#^$route$#", $uri, $matches)) {
                // Tìm thấy route, gọi action tương ứng
                $parts = explode('@', $action);
                $controllerName = $parts[0];
                $methodName = $parts[1];

                require_once "$controllerName.php";
                $controller = new $controllerName();
                $controller->$methodName($matches);
                return;
            }
        }

        // Không tìm thấy route
        echo "404 Not Found";
    }

    // Xử lý route GET
    public function get($path, $action) {
        $this->addRoute('GET', $path, $action);
    }

    // Xử lý route POST
    public function post($path, $action) {
        $this->addRoute('POST', $path, $action);
    }

    // Xử lý route PUT
    public function put($path, $action) {
        $this->addRoute('PUT', $path, $action);
    }

    // Xử lý route DELETE
    public function delete($path, $action) {
        $this->addRoute('DELETE', $path, $action);
    }
}

?>