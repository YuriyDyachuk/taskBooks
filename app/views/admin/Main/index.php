<div class="static-content">
    <div class="page-content">
        <ol class="breadcrumb">
            <li class=""><a href="<?= PATH ?>">Главная</a></li>
            <li class="active"><a href="<?= ADMIN ?>">Панель</a></li>
        </ol>
        <div class="page-heading">
            <h1>Панель Администратора</h1>
        </div>
        <div class="container-fluid">
            <div data-widget-group="group1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="amazo-tile tile-success">
                            <div class="tile-heading">
                                <div class="title">Всего записей</div>
                                <div class="secondary"></div>
                            </div>
                            <div class="tile-body">
                                <div class="content"><?=$count_task ?> шт</div>
                            </div>
                            <div class="tile-footer">
                                <span class="info-text text-left"><a href="admin/task" style="color: white">
                                        Send info <i class="fa fa-chevron-right"></i></a></span>
                                <span class="info-text text-right" style="color: white"><i class="fa fa-book"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="amazo-tile tile-success">
                            <div class="tile-heading">
                                <div class="title">Записей за</div>
                                <div class="secondary"><b><?php echo date('d-m-Y') ?></b></div>
                            </div>
                            <div class="tile-body">
                                <div class="content"><?=$count_day ?> шт</div>
                            </div>
                            <div class="tile-footer">

                                <span class="info-text text-right" style="color: white"><i class="fa
                                fa-book"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="amazo-tile tile-success">
                            <div class="tile-heading">
                                <div class="title">Пользователей</div>
                            </div>
                            <div class="tile-body">
                                <span class="content"><?=$count_user?> чел</span>
                            </div>
                            <div class="tile-footer text-center">
                                <span class="info-text text-right" style="color: white"><i class="fa
                                fa-user"></i></span>
                                <span class="info-text text-left"><a href="admin/user" style="color: white">Send info
                                        <i
                                          class="fa
                                fa-chevron-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
</div>