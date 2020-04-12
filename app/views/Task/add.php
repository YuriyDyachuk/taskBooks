<div class="static-content">
    <div class="page-content">
        <ol class="breadcrumb">
            <li class=""><a href="<?= PATH ?>">Главная</a></li>
            <li class="active">Добавление новой задачи</li>
        </ol>
        <div class="page-heading">
        </div>
        <div class="container">
            <div data-widget-group="group1">
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default" data-widget=''>
                            <div class="panel-heading">
                                <?php if (!empty($_SESSION['user'])) : ?>
                                    <form action="task/add" method="post" data-toggle="validator"
                                          enctype="multipart/form-data">

                                        <div class="box-body">
                                            <label>Описание задачи:</label>
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="title" id="title"
                                                       value="<?=isset($_SESSION['form-data']['title']) ? htmlspecialchars($_SESSION['form-data']['title']) : ''; ?>">
                                            </div>
                                            <label>Содержание задачи:</label>
                                            <div class="form-group has-feedback">
                                            <textarea name="description" id="description" cols="100" rows="5"
                                                      value="<?=isset($_SESSION['form-data']['description']) ? htmlspecialchars($_SESSION['form-data']['description']) : ''; ?>"></textarea>
                                            </div>
                                            </div>
                                        <div class="box-body">
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id'];
                                            ?>">
                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </div>

                                    </form>

                                <?php else: ?>
                                    <form action="task/add" method="post" data-toggle="validator"
                                          enctype="multipart/form-data">

                                        <div class="box-body">
                                            <label>Имя</label>
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="name" id="name"
                                                       value="<?=isset($_SESSION['form-data']['name']) ?
                                                         htmlspecialchars($_SESSION['form-data']['name']) : ''; ?>" required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                            <label>E-mail</label>
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" name="email" id="email"
                                                       value="<?=isset($_SESSION['form-data']['email']) ? htmlspecialchars($_SESSION['form-data']['email']) : ''; ?>"
                                                       required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                            <label>Логин</label>
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="login" id="login"
                                                       value="<?=isset($_SESSION['form-data']['login']) ? htmlspecialchars($_SESSION['form-data']['login']) : ''; ?>"
                                                       required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                            <label>Пароль</label>
                                            <div class="form-group has-feedback">
                                                <input type="password" class="form-control" name="password"
                                                       id="password" required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                            <label>Описание задачи:</label>
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="title" id="title"
                                                       value="<?=isset($_SESSION['form-data']['title']) ?
                                                         htmlspecialchars($_SESSION['form-data']['title']) : ''; ?>" required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                            <label>Содержание задачи:</label>
                                            <div class="form-group has-feedback">
                                            <textarea name="description" id="description" cols="100" rows="5"
                                                      value="<?=isset($_SESSION['form-data']['description']) ?
                                                        htmlspecialchars($_SESSION['form-data']['description']) : '';
                                                      ?>" required></textarea>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </div>

                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .container-fluid -->
    </div> <!-- #page-content -->
</div>

<script>
    $(document).ready(function () {
        $('.button').bind("click", function(e) {
            // e.preventDefault();
            let id = $('<input hidden>').val();

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: {id:id},
                dataType: 'json',
            });

        });
    });
</script>

