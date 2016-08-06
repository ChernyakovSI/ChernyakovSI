<?php
/**
 * Created by PhpStorm.
 * User: Dusty
 * Date: 07.07.2016
 * Time: 22:50
 */
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Авторизация</h1>
        <form action="" method="post">
            <input type="hidden" name="action" value="login"/>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" placeholder="Имя пользователя" class="form-control" name="username">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" placeholder="Пароль" class="form-control" name="password">
            </div>
            <div class="form-group input-group">
                <input type="checkbox" name="remember"> Запомнить
            </div>


            <button class="btn btn-success" type="submit">Войти</button>
        </form>

        </br>
        <form action="" method="post">
            <input type="hidden" name="action" value="tosignup"/>
            <button class="btn btn-success" type="submit">Зарегистрироваться</button>
        </form>

    </div>
    <!-- /.col-lg-12 -->

</div>
<!-- /.row -->
