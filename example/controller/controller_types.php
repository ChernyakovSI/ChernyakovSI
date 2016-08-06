<?php
/**
 * Created by PhpStorm.
 * User: Paladin
 * Date: 25.06.2016
 * Time: 13:25
 */

class TypesController extends general
{
    
    function types_all()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'view_type') {
                $id = $_POST['id'];
                header("Location: index.php?cat=types&act=view&id=" . $id);
            }

            if ($_POST['action'] === 'edit_type') {
                $id = $_POST['id'];
                header("Location: index.php?cat=types&act=edit&id=" . $id);
            }

            if ($_POST['action'] === 'delete_type') {
                $id = $_POST['id'];
                header("Location: index.php?cat=types&act=delete&id=" . $id);
            }

            if ($_POST['action'] === 'add_type') {
                header("Location: index.php?cat=types&act=add");
            }
        }

        $types = type::all();

        $html_text = render("types_all", ['types' => $types]);
        return $html_text;

    }

    function types_view()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'edit_type') {
                $id = $_POST['id'];
                header("Location: index.php?cat=types&act=edit&id=" . $id);

            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: index.php?cat=types&act=all");
        }

        $type = new type($id);

        if (!$type->is_loaded())
        {
            die('Нет такого объекта');
        }

        $html_text = render("types_one", ['type' => $type]);
        return $html_text;
    }

    function types_add()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'add_type') 
            {
                $type = new type;
                $type->Name = $_POST['name'];

                if ($type->add())
                {
                    header("Location: index.php?cat=types&act=all");
                } 
                else
                {
                    echo 'Не удалось добавить данные!';
                    exit();
                }
            }

            if ($_POST['action'] === 'cancel_rent') 
            {
                header("Location: index.php?cat=types&act=all");
            }
        }
        
        $html_text = render("types_add");
        return $html_text;
    }

    function types_edit()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'edit_type') 
            {
                $type = new type($_POST['id']);
                $type->Name = $_POST['name'];

                if ($type->edit()) 
                {
                    header("Location: index.php?cat=types&act=all");
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
            header("Location: index.php?cat=types&act=all");
        }

        $type = new type($id);

        $html_text = render("types_edit", ['type' => $type]);
        return $html_text;
    }

    function types_delete()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'delete_type') {
                $id = $_POST['id'];

                $type = new type($id);

                if ($type->delete()) 
                {
                    header("Location: index.php?cat=types&act=all");
                } 
                else 
                {
                    echo 'Не удалось удалить данные!';
                    exit();
                }
            }

            if ($_POST['action'] === 'cancel_type') {
                header("Location: index.php?cat=types&act=all");
            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: index.php?cat=types&act=all");
        }

        $type = new type($id);

        $html_text = render("types_delete", ['type' => $type]);
        return $html_text;
    }
}