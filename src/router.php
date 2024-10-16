 <?php
    $paht = parse_url($_SERVER["REQUEST_URI"])["path"];

    $routes = [
        "/" => "controllers/index.controller.php",
        "/conferences" => "controllers/conferences.controller.php",
    ];

    function routeToController($path, $routes) {
        if (!key_exists($path, $routes)) {
            return abort();
        }

        require($routes[$path]);
    }

    function abort($code = 404) {
        http_response_code($code);
        require("views/{$code}.php");
    }

    routeToController($paht, $routes);
