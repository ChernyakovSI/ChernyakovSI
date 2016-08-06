    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Список типов помещений</h1>
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

                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                </tr>
                </thead>
                <?php
                foreach ($types as $Akey => $Avalue)
                {
                    ?>
                    <tr>
                        <th>
                            <?= $Avalue->Name ?>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="view_type"/>
                                <input type="hidden" name="id" value="<?= $Avalue->ID ?>"/>
                                <button type="submit"><p class="fa fa-search"></p></button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="edit_type"/>
                                <input type="hidden" name="id" value="<?= $Avalue->ID ?>"/>
                                <button type="submit"><p class="fa fa-pencil"></p></button>
                            </form>
                        </th>
                        <th>
                            <form action="" method="post">
                                <input type="hidden" name="action" value="delete_type"/>
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
                            <input type="hidden" name="action" value="add_type"/>
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