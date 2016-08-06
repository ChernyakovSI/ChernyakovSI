<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-14">
                <h1 class="page-header">Добавление пользователя</h1>
            </div>
            <!-- /.col-lg-12 -->

            <form action="" method="post">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>
                            <label for="username">Пользователь:</label>
                        </th>
                        <th>
                            <input type="text" name="username" id="username" placeholder="Пользователь" value=""/>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="password">Пароль:</label>
                        </th>
                        <th>
                            <input type="password" name="password" id="password" placeholder="Пароль" value=""/>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="role">Роль:</label>
                        </th>
                        <th>
                            <select name="role">
                                    <?php
                                    foreach(User::$roles as $key => $role)
                                    {
                                        ?>
                                        <option value="<?= $key ?>"><?= $role ?></option>
                                        <?php
                                    }
                                    ?>
                            </select>
                        </th>
                    </tr>
                    </thead>
                </table>

                </br>
                <table>
                    <thead>
                    <tr>
                        <th>
                            <input type="hidden" name="action" value="add_user"/>
                            <button type="submit">Добавить</button>
                        </th>
                        <th>
                            &nbsp;&nbsp;&nbsp;
                        </th>
                        <th>
                            <a href="index.php?cat=users&act=all">Отменить</a>
                        </th>
                    </tr>
                    </thead>
                </table>
            </form>

        </div>




        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->