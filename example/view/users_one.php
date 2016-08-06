<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-14">
                <h1 class="page-header">Пользователь</h1>
            </div>
            <!-- /.col-lg-12 -->

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

            </br><form action="" method="post">
                <input type="hidden" name="action" value="edit_user"/>
                <input type="hidden" name="id" value="<?= $user->ID ?>"/>
                <a class ="btn" href="index.php?cat=users&act=edit&id=<?php echo "$user->ID"; ?>">Изменить</a>
            </form>

        </div>




        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->