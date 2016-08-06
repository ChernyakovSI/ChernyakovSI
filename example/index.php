<?php
    define("LESSON_NUMBER", "Образец для GeekBrains");

    error_reporting(E_ALL);

    session_start();

    include_once "system/base_model.php";
    include_once "system/system_model.php";
    include_once "system/helper/array_helper.php";
    include_once "model/functions_rents_model.php";
    include_once "model/functions_types_model.php";
    include_once "model/functions.php";
    include_once "model/functions_users_model.php";

    spl_autoload_register('class_autoloader');

    $system = new System();

    if (isset($_POST['action']))
    {
        if ($_POST['action'] === 'login') 
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (isset($_POST['remember']))
            {
                $remember = $_POST['remember'];
            }
            else
            {
                $remember = false;
            }
            $system->user->auth($username, $password, $remember);
        }

        if ($_POST['action'] === 'signup')
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (isset($_POST['remember']))
            {
                $remember = $_POST['remember'];
            }
            else
            {
                $remember = false;
            }
            $system->user->create_password($password);
            $system->user->Role = 1;
            $system->user->Username = $username;
            $system->user->add();

            $system->user->auth($username, $password, $remember);
        }

        if ($_POST['action'] === 'tosignup')
        {
            echo render("auth/signup", [], true, true);
            exit();
        }
    }

    if ($system->user->auth_flow() === false)
    {
        echo render("auth/login", [], true, true);
        exit();
    }
    else
    {
        if (isset($_GET['cat'])) {
            $controller = $_GET['cat'];
        } else {
            $controller = 'rents';
        }

        if (isset($_GET['act'])) {
            $act = $_GET['act'];
        } else {
            $act = "all";
        }

        if (($controller === "log") and ($act === "out")) {
            unset($_SESSION["username"]);
            unset($_SESSION["password"]);
            session_destroy();
            unset($_GET);
            header('Location: index.php');
            exit();
        }

        $controller_class_name = name2controller_class_name($controller);
        $controller_function_name = $controller . "_" . $act;

        $controller_object = new $controller_class_name();

        $result = $controller_object->$controller_function_name();
        if ($result) echo $result;

        mysqli_close(Model::get_db());
    }
