<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-14">
                <h1 class="page-header">Изменение пользователя</h1>
            </div>
            <!-- /.col-lg-12 -->

            <form action="" method="post">
                <input type="hidden" name="action" value="edit_user"/><br/>
                <input type="hidden" name="id" value="<?= $user->ID ?>"/><br/>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>
                            <label for="Username">Пользователь:</label>
                        </th>
                        <th>
                            <input type="text" name="Username" id="Username" placeholder="Пользователь" value="<?= $user->Username ?>"/>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="Role">Роль:</label>
                        </th>
                        <th>
                            <select name="Role" id="Role">
                                <?php
                                foreach (User::$roles as $key => $value)
                                {
                                    ?>
                                    <option value="<?= $key?>"
                                        <?php if ($key == $user->Role)
                                        {
                                            echo 'selected = "selected"';
                                        }
                                        ?>><?= $value ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </th>
                    </tr>
                    </thead>
                </table>

                <table>
                    <tr>
                        <th>
                            <button type="submit">Изменить</button>
                        </th>
                        <th>
                            &nbsp;&nbsp;&nbsp;
                        </th>
                        <th>
                            <a href="index.php?cat=users&act=all">Отменить</a>
                        </th>
                    </tr>
                </table>
            </form>

        </div>




        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->