    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Изменение типа помещения</h1>
                </div>
                <!-- /.col-lg-12 -->

                <form action="" method="post">
                    <input type="hidden" name="action" value="edit_type"/><br/>
                    <input type="hidden" name="id" value="<?= $type->ID ?>"/><br/>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>
                                <label for="name">Название:</label>
                            </th>
                            <th>
                                <input type="text" name="name" id="name" placeholder="Название" value="<?= $type->Name ?>"/>
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
                                <a href="index.php?cat=types&act=all">Отменить</a>
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