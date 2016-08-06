<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-14">
                <h1 class="page-header">Удаление пользователя</h1>
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-lg-14">
                Подтвердите удаление записи:
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>
                        Пользователь:
                    </th>
                    <th>
                        <?= $user->Username ?>
                    </th>
                </tr>
                <tr>
                    <th>
                        Роль:
                    </th>
                    <th>
                        <?= User::$roles[$user->Role] ?>
                    </th>
                </tr>
                </thead>
            </table>

            </br>
            <table>
                <thead>
                <tr>
                    <th>
                        <form action="" method="post">
                            <input type="hidden" name="action" value="delete_user"/>
                            <input type="hidden" name="id" value="<?= $user->ID ?>"/>
                            <button type="submit">Удалить</button>
                        </form>
                    </th>
                    <th>
                        <form action="" method="post">
                            <input type="hidden" name="action" value="cancel_user"/>
                            <input type="hidden" name="id" value="<?= $user->ID ?>"/>
                            <button type="submit">Отменить</button>
                        </form>
                    </th>
                </tr>
                </thead>
            </table>


        </div>




        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->