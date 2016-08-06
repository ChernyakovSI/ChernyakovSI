    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Изменение аренды</h1>
                </div>
                <!-- /.col-lg-12 -->

                <form action="" method="post">
                    <input type="hidden" name="action" value="edit_rent"/><br/>
                    <input type="hidden" name="id" value="<?= $rent->ID ?>"/><br/>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>
                                <label for="name">Название:</label>
                            </th>
                            <th>
                                <input type="text" name="name" id="name" placeholder="Название" value="<?= $rent->Name ?>"/>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="id_type">Тип:</label>
                            </th>
                            <th>
                                <select name="id_type" id="id_type">
                                    <?php
                                    foreach ($apartment_types as $key => $value)
                                    {
                                        ?>
                                        <option value="<?= $value->ID?>"
                                        <?php if ($value->ID === $rent->Type)
                                        {
                                            echo 'selected = "selected"';
                                        }
                                        ?>><?= $value->Name ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="address">Адрес:</label>
                            </th>
                            <th>
                                <input type="text" name="address" id="address" placeholder="Адрес" value="<?= $rent->Address ?>"/>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="subscription">Описание:</label>
                            </th>
                            <th>
                                <textarea name="subscription" id="subscription" placeholder="Описание"><?= $rent->Subscription ?></textarea>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="price">Цена:</label>
                            </th>
                            <th>
                                <input type="text" name="price" id="price" placeholder="Цена" value="<?= $rent->Price ?>"/>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="square">Площадь:</label>
                            </th>
                            <th>
                                <input type="text" name="square" id="square" placeholder="Площадь" value="<?= $rent->Square ?>"/>
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
                                <a href="index.php">Отменить</a>
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