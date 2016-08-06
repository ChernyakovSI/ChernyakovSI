    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Добавление аренды</h1>
                </div>
                <!-- /.col-lg-12 -->

                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $Apartments['0']['id'] ?>"/><br/>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>
                                <label for="name">Название:</label>
                            </th>
                            <th>
                                <input type="text" name="name" id="name" placeholder="Название" value=""/>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="id_type">Тип:</label>
                            </th>
                            <th>
                                <select name="id_type" id="id_type">
                                    <?php
                                    foreach ($types as $key => $value)
                                    {
                                        ?>
                                        <option value="<?= $value->ID ?>"><?= $value->Name ?></option>
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
                                <input type="text" name="address" id="address" placeholder="Адрес" value=""/>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="Subscription">Описание:</label>
                            </th>
                            <th>
                                <textarea name="Subscription" id="Subscription" placeholder="Описание"></textarea>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="price">Цена:</label>
                            </th>
                            <th>
                                <input type="text" name="price" id="price" placeholder="Цена" value=""/>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="square">Площадь:</label>
                            </th>
                            <th>
                                <input type="text" name="square" id="square" placeholder="Площадь" value=""/>
                            </th>
                        </tr>
                        </thead>
                    </table>

                    </br>
                    <table>
                        <thead>
                        <tr>
                            <th>
                                <input type="hidden" name="action" value="add_rent"/>
                                <button type="submit">Добавить</button>
                            </th>
                            <th>
                                &nbsp;&nbsp;&nbsp;
                            </th>
                            <th>
                                <a href="index.php">Отменить</a>
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

