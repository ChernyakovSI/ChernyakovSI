<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Список аренды помещений</h1>
                </div>
                <!-- /.col-lg-12 -->

            </div>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>
                        Название
                    </th>
                    <th>
                        Тип
                    </th>
                    <th>
                        Адрес
                    </th>
                    <th>
                        Цена (руб.)
                    </th>
                    <th>
                        Площадь (кв.м.)
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
                foreach ($rents as $Akey => $Avalue)
                {
                    ?>
                    <tr>
                        <th>
                            <?= $Avalue->Name ?>
                        </th>
                        <th>
                            <?php foreach($apartment_types as $value)
                            {
                                if ($value->ID === $Avalue->Type)
                                {
                                    echo $value->Name;
                                }
                            } ?>
                        </th>
                        <th>
                            <?= $Avalue->Address ?>
                        </th>
                        <th>
                            <?= $Avalue->Price ?>
                        </th>
                        <th>
                            <?= $Avalue->Square ?>
                        </th>
                        <th>
                             <form action="" method="post">
                                <input type="hidden" name="action" value="view_rent"/>
                                <input type="hidden" name="id" value="<?= $Avalue->ID ?>"/>
                                <button type="submit"><p class="fa fa-search"></p></button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="edit_rent"/>
                                <input type="hidden" name="id" value="<?= $Avalue->ID ?>"/>
                                <button type="submit"><p class="fa fa-pencil"></p></button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="delete_rent"/>
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
                            <input type="hidden" name="action" value="add_rent"/>
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
