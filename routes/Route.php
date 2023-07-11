<?php

class Route
{
    protected $route_list = [];

    public function get($uri, $controller)
    {
        $function = explode('@', $controller)[1];
        $controller = explode('@', $controller)[0];
        $this->route_list[] = [
            'method' => 'GET',
            'uri' => $uri,
            'controller' => $controller,
            'function' => $function,
        ];
        return $this;
    }

    public function post($uri, $controller)
    {
        $function = explode('@', $controller)[1];
        $controller = explode('@', $controller)[0];
        $this->route_list[] = [
            'method' => 'POST',
            'uri' => $uri,
            'controller' => $controller,
            'function' => $function,
        ];
        return $this;
    }

    public function params()
    {
        $route_last_index = count($this->route_list) - 1;
        $this->route_list[$route_last_index]['params'] = func_get_args();
        return $this;
    }

    public function start()
    {
        // dd($this);
        $request_method = $_SERVER['REQUEST_METHOD'];
        $request_uri = explode('?', $_SERVER['REQUEST_URI'])[0];

        $target_route = [];
        foreach ($this->route_list as $route) {
            $uri = $route['uri'];
            $method = $route['method'];

            if ($uri == $request_uri) {
                if ($method == $request_method) {
                    $target_route = $route;
                    if ($method == 'POST') {
                        session()->put('old', (object) $_REQUEST);
                    } else if ($_SERVER['HTTP_SEC_FETCH_SITE'] != 'same-origin') {
                        session()->put('old', null);
                        session()->put('error_message', null);
                    }else{

                    }
                } else {
                    echo "error 500 request method not supported.";
                }
            }
        }

        if (!count($target_route)) {
            echo "error 404 page not found";
            return 0;
        }

        if (isset($target_route['params']) && count($target_route['params'])) {
            foreach ($target_route['params'] as $param) {
                if (!isset($_REQUEST[$param])) {
                    echo "error 400 page not found, $param pameter is missing.";
                    return 0;
                }
            }
        }

        $controller = $target_route['controller'];
        $function = $target_route['function'];

        $controller = "\\App\\Http\\Controllers\\$controller";
        $controller = new $controller();
        $controller->$function(...array_values($_REQUEST));
    }
}
