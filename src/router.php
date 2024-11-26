 <?php
    $paht = parse_url($_SERVER["REQUEST_URI"])["path"];

    $routes = [
        "/" => "index.controller.php",
        "/conferences" => "conferences.controller.php",
        "/conference" => "conference.controller.php",
        "/employee" => "employee.controller.php",
        "/employee/update" => "update_employee.controller.php",
        "/conference-report/create" => "create_conference_report.controller.php",
    ];

    function routeToController($path, $routes) {
        if (!key_exists($path, $routes)) {
            return abort();
        }

        require("db.php");
        require("controllers/$routes[$path]");
    }

    function abort($code = 404) {
        http_response_code($code);
        require("views/{$code}.php");
    }

    routeToController($paht, $routes);
