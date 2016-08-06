<?php
/**
 * Created by PhpStorm.
 * User: Paladin
 * Date: 23.06.2016
 * Time: 23:18
 */

class RentsController extends general
{
      
    function rents_all()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'view_rent') {
                $id = $_POST['id'];
                header("Location: index.php?cat=rents&act=view&id=" . $id);
            }

            if ($_POST['action'] === 'edit_rent') {
                $id = $_POST['id'];
                header("Location: index.php?cat=rents&act=edit&id=" . $id);
            }

            if ($_POST['action'] === 'delete_rent') {
                $id = $_POST['id'];
                header("Location: index.php?cat=rents&act=delete&id=" . $id);
            }

            if ($_POST['action'] === 'add_rent') {
                header("Location: index.php?cat=rents&act=add");
            }
        }

        $rents = rent::all();
        $types = type::all();
        $types = ArrayHelper::index($types,'ID');

        $html_text = render("rent_all", ['rents' => $rents,
            'apartment_types' => $types]);
        return $html_text;
    }

    function rents_view()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'edit_rent') {
                $id = $_POST['id'];
                header("Location: index.php?cat=rents&act=edit&id=" . $id);

            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: index.php");
        }

        $rent = new rent($id);
        $types = type::all();
        $types = ArrayHelper::index($types,'ID');

        if (!$rent->is_loaded())
        {
            die('Нет такого объекта');
        }

        $html_text = render("rent_one", ['rent' => $rent,
            'apartment_types' => $types]);
        return $html_text;
    }

    function rents_add()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'add_rent') {
                $rent = new rent;

                $rent->Name = $_POST['name'];
                $rent->Type = $_POST['id_type'];
                $rent->Address = $_POST['address'];
                $rent->Subscription = $_POST['Subscription'];
                $rent->Price = $_POST['price'];
                $rent->Square = $_POST['square'];
                
                if ($rent->add() === true) {
                    header("Location: index.php");
                } 
                else 
                {
                    echo 'Не удалось добавить данные!';
                    exit();
                }
            }

            if ($_POST['action'] === 'cancel_rent') {
                header("Location: index.php");
            }
        }

        $types = type::all();

        $html_text = render("rent_add", ['types' => $types]);
        return $html_text;
    }

    function rents_edit()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'edit_rent') 
            {
                $rent = new rent($_POST['id']);

                $rent->Name = $_POST['name'];
                $rent->Type = $_POST['id_type'];
                $rent->Address = $_POST['address'];
                $rent->Subscription = $_POST['subscription'];
                $rent->Price = $_POST['price'];
                $rent->Square = $_POST['square'];

                if ($rent->edit() === true)
                {
                    header("Location: index.php");
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
            header("Location: index.php");
        }

        $rent = new rent($id);
        $types = type::all();
        $types = ArrayHelper::index($types,'ID');

        $html_text = render("rent_edit", ['rent' => $rent, 'apartment_types' => $types]);
        return $html_text;
    }

    function rents_delete()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'delete_rent') {
                $id = $_POST['id'];

                $rent = new rent($id);
                $result = $rent->delete();

                if ($result === true) {
                    header("Location: index.php");
                } else {
                    echo 'Не удалось удалить данные!';
                    exit();
                }
            }

            if ($_POST['action'] === 'cancel_rent') {
                header("Location: index.php");
            }
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header("Location: index.php");
        }

        $rent = new rent($id);
        $types = type::all();
        $types = ArrayHelper::index($types,'ID');

        $html_text = render("rent_delete", ['rent' => $rent, 'apartment_types' => $types]);
        return $html_text;
    }
}