<?php
/**
 * Created by PhpStorm.
 * User: Paladin
 * Date: 25.06.2016
 * Time: 14:12
 */

class general
{
    public function __call($name,$params)
    {
        e404("Функция {$name} не обнаружена");
    }
}

function render($view_name, $data = [], $with_layout = true, $logout = false)
{
    ob_start();

    if (file_exists("view/{$view_name}.php"))
    {
        foreach ($data as $key => $value)
        {
            $$key = $value;
        }

        require_once("view/{$view_name}.php");
        $content = ob_get_contents();
        ob_end_clean();

        if ($with_layout)
        {
            ob_start();
            if ($logout === false) 
            {
                require_once("view/layout/index.php");
            }
            else
            {
                require_once("view/layout/index_logout.php");
            }
            $content = ob_get_contents();
            ob_end_clean();
        }

        return $content;
    }
    else
    {
        return false;
    }

}

function class_autoloader($classname)
{

    if (mb_substr($classname,-10,NULL,'utf-8') === 'Controller')
    {
        $class_string = mb_substr($classname,0,mb_strlen($classname,'utf-8')-10,'utf-8');
        $name = preg_replace('/([a-z])([A-Z])/', '$1_$2', $class_string);
        $file_name = "controller/controller_".mb_strtolower($name,'utf-8').'.php';

        if (file_exists($file_name))
        {
            include_once $file_name;
        }
        else
        {

            e404();
        }
    }

}

function e404($message = '')
{
    header("HTTP/1.1 404 Not Found");
    die($message);
}

function name2controller_class_name($name)
{
    $pie = explode('_',$name);
    $result = '';
    foreach($pie as $v)
    {
        $result .= ucfirst($v);
    }
    $result.="Controller";

    return $result;
}