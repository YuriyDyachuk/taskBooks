<div class="static-content">
    <div class="page-content">
        <ol class="breadcrumb">
            <li class=""><a href="<?= ADMIN ?>">Главная</a></li>
            <li class="active">Список пользователей</li>
        </ol>
        <div class="page-heading">
        </div>
        <div class="container-fluid">
            <div data-widget-group="group1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default" data-widget=''>
                            <div class="panel-heading">
                                <h2>Todo List</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">№</th>
                                                        <th scope="col">Имя</th>
                                                        <th scope="col">E-mail</th>
                                                        <th scope="col">Логин</th>
                                                        <th scope="col">Роль</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($users as $user): ?>
                                                        <tr>
                                                            <th scope="row"><?=$user->id?></th>
                                                            <td><?=$user->name?></td>
                                                            <td><?=$user->email?></td>
                                                            <td><?=$user->login?></td>
                                                            <td><?=$user->role?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-editbox" data-widget-controls=""></div>
                            <div class="todo-footer clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
</div>
