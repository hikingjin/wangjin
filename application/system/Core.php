<?php
/**
 * Created by PhpStorm.
 * User: wangjin
 * Date: 17/1/23
 * Time: 17:41
 */
$segment = FALSE;
$controller_name = FALSE;
$method_name = FALSE;
set_segment();
set_controller_and_method();


function set_segment() {
    $uri = $_SERVER['REQUEST_URI'];
    global $segment;
    $segment = explode('/', $uri);

}

function set_controller_and_method() {
    global $segment, $controller_name, $method_name;
    foreach ($segment as $item) {
        $item = trim($item);
        if ($item !== '/' && $item !== '') {
            if (!$controller_name) {
                $controller_name =  ucfirst($item);
                continue;
            }
            if (!$method_name) {
                $method_name = $item;
                break;
            }

        }

    }
}

$controller_file = realpath('application/controller/') . '/' .$controller_name . 'Controller'.'.php' ;
 
if (file_exists($controller_file )){
    require_once $controller_file;
}else{
    echo ' not fund controller';die;
}

$controller_class = new ReflectionClass($controller_name. 'Controller');
$controller = $controller_class->newInstance();

$method = $controller_class->getmethod($method_name);
$method->invoke($controller);

