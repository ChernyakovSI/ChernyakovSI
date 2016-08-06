    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Удаление типа помещения</h1>
                </div>
                <!-- /.col-lg-12 -->

                <div class="col-lg-14">
                    Подтвердите удаление записи:
                </div>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>
                            Название:
                        </th>
                        <th>
                            <?= $type->Name ?>
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
                                <input type="hidden" name="action" value="delete_type"/>
                                <input type="hidden" name="id" value="<?= $type->ID ?>"/>
                                <button type="submit">Удалить</button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="cancel_type"/>
                                <input type="hidden" name="id" value="<?= $type->ID ?>"/>
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