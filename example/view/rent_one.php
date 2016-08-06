    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Описание аренды</h1>
                </div>
                <!-- /.col-lg-12 -->

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

                </br><form action="" method="post">
                    <input type="hidden" name="action" value="edit_rent"/>
                    <input type="hidden" name="id" value="<?= $rent->ID ?>"/>
                    <button type="submit">Изменить</button>
                </form>

            </div>




            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
