<div class="static-content">
    <div class="page-content">
        <ol class="breadcrumb">
            <li class=""><a href="<?= ADMIN ?>">Главная</a></li>
            <li class="active">Список задач</li>
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
                                                            <th scope="col">Имя пользователя</th>
                                                            <th scope="col">E-mail пользователя</th>
                                                            <th scope="col">Дата добавления</th>
                                                            <th scope="col">Название задачи</th>
                                                            <th scope="col">Описание задачи</th>
                                                            <th scope="col">Статус</th>
                                                            <th scope="col">Действия</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($tasks as $task): ?>
                                                        <tr>
                                                            <th scope="row"><?=$task['id']?></th>
                                                            <td><?=$task['name']?></td>
                                                            <td><?=$task['email']?></td>
                                                            <td><?=$task['created_at']?></td>
                                                            <td><?=$task['title']?></td>
                                                            <td><?=$task['description']?></td>
                                                            <?php if ($task['publish'] == 1): ?>
                                                              <td><mark>В ожидании</mark></td>
                                                            <?php else: ?>
                                                              <td style="color: green">Выполнено</td>
                                                            <?php endif; ?>
                                                            <td>
                                                                <a href="<?= ADMIN ?>/task/edit?id=<?=$task['id']?>">
                                                                    <i class="fa fa-eye-slash" style="margin-left: 20px"></i>
                                                                </a>
                                                            </td>
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
                          <div class="text-center">
                              <p>(<?=count($tasks); ?> задач(чи) из <?=$count?>)</p>
                              <?php if ($pagination->countPages > 1) : ?>
                                  <?=$pagination; ?>
                              <?php endif; ?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
</div>
