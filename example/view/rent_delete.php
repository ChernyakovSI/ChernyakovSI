    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Удаление аренды</h1>
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
                            <?= $rent->Name ?>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Тип:
                        </th>
                        <th>
                            <?php foreach($apartment_types as $value)
                            {
                                if ($value->ID === $rent->Type)
                                {
                                    echo $value->Name;
                                }
                            } ?>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Адрес:
                        </th>
                        <th>
                            <?= $rent->Address ?>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Описание:
                        </th>
                        <th>
                            <?= $rent->Subscription ?>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Цена:
                        </th>
                        <th>
                            <?= $rent->Price ?> руб.
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Площадь:
                        </th>
                        <th>
                            <?= $rent->Square ?> кв.м.
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
                                <input type="hidden" name="action" value="delete_rent"/>
                                <input type="hidden" name="id" value="<?= $rent->ID ?>"/>
                                <button type="submit">Удалить</button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="cancel_rent"/>
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
