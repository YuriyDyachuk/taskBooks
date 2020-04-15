<div class="static-content">
    <div class="page-content">
        <ol class="breadcrumb">
            <li class=""><a href="<?= PATH ?>">Главная</a></li>
            <li class="active">Редактирование задачи</li>
        </ol>
        <hr>
        <h2 style="text-align: center">Форма для редактирования</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <form action="<?=PATH;?>/task/edit" method="post" data-toggle="validator"
                              enctype="multipart/form-data">
                            <div class="box-body">
                                <fieldset disabled>
                                <div class="form-group has-feedback">
                                    <label for="disabledTextInput">Название задачи:</label>
                                    <input type="text" id="disabledTextInput" class="form-control"  value="<?=$task->title?>">
                                </div>
                                <label>Описание к задаче:</label>
                                <div class="form-group has-feedback">
                                    <textarea class="disabled" name="description" cols="120"
                                              rows="5"><?=$task->description?></textarea>
                                </div>
                                </fieldset>
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
        </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
</div>
