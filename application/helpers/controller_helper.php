<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('controller'))
{
    function controller($controller, $method = 'index')
    {
        require_once(FCPATH . APPPATH . 'controllers/' . $controller . '.php');

        $controller = new $controller();

        return $controller->$method();
    }
}