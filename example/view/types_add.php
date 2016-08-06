    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Добавление типа помещения</h1>
                </div>
                <!-- /.col-lg-12 -->

                <form action="" method="post">
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
                        </thead>
                    </table>

                    </br>
                    <table>
                        <thead>
                        <tr>
                            <th>
                                <input type="hidden" name="action" value="add_type"/>
                                <button type="submit">Добавить</button>
                            </th>
                            <th>
                                &nbsp;&nbsp;&nbsp;
                            </th>
                            <th>
                                <a href="index.php?cat=types&act=all">Отменить</a>
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