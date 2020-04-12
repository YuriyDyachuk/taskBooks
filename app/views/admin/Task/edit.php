<div class="static-content">
    <div class="page-content">
        <ol class="breadcrumb">
            <li class=""><a href="<?= ADMIN ?>">Главная</a></li>
            <li class=""><a href="<?= ADMIN ?>/task">Список задач</a></li>
            <li class="active">Редактирование задачи</li>
        </ol>
        <div class="page-heading">
        </div>
        <div class="container-fluid">
            <div data-widget-group="group1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default" data-widget=''>
                            <div class="panel-heading">
                                <h2>Форма для редактирования</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box">
                                            <form action="<?=ADMIN;?>/task/edit" method="post" data-toggle="validator"
                                                  enctype="multipart/form-data">
                                                <div class="box-body">
<!--                                                    <fieldset disabled>-->
                                                    <div class="form-group has-feedback">
                                                        <label for="disabledTextInput">Название задачи:</label>
                                                        <input type="text" id="disabledTextInput" class="form-control" name="title" value="<?=$task->title?>">
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    </div>
<!--                                                    </fieldset>-->
                                                    <label>Описание к задаче:</label>
                                                    <div class="form-group has-feedback">
                                                        <textarea class="disabled" name="description" id="description" cols="120"
                                                                  rows="5"><?=$task->description?></textarea>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Изменить статус:</label>
                                                        <select name="publish" id="publish" class="form-control">
                                                            <option value="1"<?php if ($task->publish == '1') echo 'selected';?>
                                                            >Не выполнено</option>
                                                            <option value="2"<?php if ($task->publish == '2') echo 'selected';?>>Выполнено</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <input type="hidden" name="id" value="<?=$task->id?>">
                                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                                </div>
                                            </form>
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
