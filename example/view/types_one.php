    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <h1 class="page-header">Тип помещения</h1>
                </div>
                <!-- /.col-lg-12 -->

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

                </br><form action="" method="post">
                    <input type="hidden" name="action" value="edit_type"/>
                    <input type="hidden" name="id" value="<?= $type->ID ?>"/>
                    <a class ="btn" href="index.php?cat=types&act=edit&id=<?php echo "$type->ID"; ?>">Изменить</a>
                </form>

            </div>




            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->