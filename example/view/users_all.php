    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Список пользователей</h1>
                </div>
                <!-- /.col-lg-12 -->

            </div>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>
                        Пользователь
                    </th>
                    <th>
                        Роль
                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                </tr>
                </thead>
                <?php
                foreach ($users as $Akey => $Avalue)
                {
                    ?>
                    <tr>
                        <th>
                            <?= $Avalue->Username ?>
                        </th>
                        <th>
                            <?= User::$roles[$Avalue->Role] ?>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="view_user"/>
                                <input type="hidden" name="id" value="<?= $Avalue->ID ?>"/>
                                <button type="submit"><p class="fa fa-search"></p></button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="edit_user"/>
                                <input type="hidden" name="id" value="<?= $Avalue->ID ?>"/>
                                <button type="submit"><p class="fa fa-pencil"></p></button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="delete_user"/>
                                <input type="hidden" name="id" value="<?= $Avalue->ID ?>"/>
                                <button type="submit"><p class="fa fa-times"></p></button>
                            </form>
                        </th>
                    </tr>
                    <?php
                }
                ?>

            </table>

            </br>
            <table>
                <thead>
                <tr>
                    <th>
                        <form action="" method="post">
                            <input type="hidden" name="action" value="add_user"/>
                            <button type="submit">Добавить</button>
                        </form>
                    </th>
                </tr>
                </thead>
            </table>


            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->