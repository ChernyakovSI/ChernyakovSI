<?php
/**
 * Created by PhpStorm.
 * User: Paladin
 * Date: 10.07.2016
 * Time: 19:26
 */

class UsersController extends general
{
    function __call($name, $params)
    {
        e404();
    }

    function users_all()
    {

        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'view_user') {
                $id = $_POST['id'];
                header("Location: index.php?cat=users&act=view&id=" . $id);
            }

            if ($_POST['action'] === 'edit_user') {
                $id = $_POST['id'];
                header("Location: index.php?cat=users&act=edit&id=" . $id);
            }

            if ($_POST['action'] === 'delete_user') {
                $id = $_POST['id'];
                header("Location: index.php?cat=users&act=delete&id=" . $id);
            }

            if ($_POST['action'] === 'add_user') {
                header("Location: index.php?cat=users&act=add");
            }
        }

        $users = User::all();

        return render('users_all', [
            'users' => $users
        ]);
    }

    function users_add()
    {

        if (count($_POST))
        {
            if ($_POST['action'] === 'add_user')
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $role = $_POST['role'];

                $user = new User();
                $user->Username = $username;
                $user->Role = $role;
                $user->create_password($password);
                
                // TODO обработать password

                if ($user->add()!== Model::CREATE_FAILED) 
                {
                    header("Location: index.php?cat=users&view=all");
                    die();

                }
                else
                {
                    die("Не удалось добавить");
                }

            }
        }

        return render('users_add', [

        ]);

    }

    function users_view()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'edit_user') {
                $id = $_POST['id'];
                header("Location: index.php?cat=users&act=edit&id=" . $id);

            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: index.php?cat=users&act=all");
        }

        $user = new user($id);

        if (!$user->is_loaded())
        {
            die('Нет такого объекта');
        }

        $html_text = render("users_one", ['user' => $user]);
        return $html_text;
    }

    function users_edit()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'edit_user')
            {
                $user = new user($_POST['id']);
                $user->Username = $_POST['Username'];
                $user->Role = $_POST['Role'];

                if ($user->edit())
                {
                    header("Location: index.php?cat=users&act=all");
                }
                else
                {
                    echo 'Не удалось изменить данные!';
                    exit();
                }

            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: index.php?cat=users&act=all");
        }

        $user = new user($id);

        $html_text = render("users_edit", ['user' => $user]);
        return $html_text;
    }

    function users_delete()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'delete_user') {
                $id = $_POST['id'];

                $user = new user($id);

                if ($user->delete())
                {
                    header("Location: index.php?cat=users&act=all");
                }
                else
                {
                    echo 'Не удалось удалить данные!';
                    exit();
                }
            }

            if ($_POST['action'] === 'cancel_user') {
                header("Location: index.php?cat=users&act=all");
            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: index.php?cat=users&act=all");
        }

        $user = new user($id);

        $html_text = render("users_delete", ['user' => $user]);
        return $html_text;
    }
}