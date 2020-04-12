<div class="container-fluid">
    <h2>Регистрация</h2>
    <form class="form-horizontal" action="user/register" method="post" data-toggle="validator">
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="firstName">Имя:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="firstName" placeholder="Введите имя"
                       value="<?=isset($_SESSION['form-data']['name']) ? htmlspecialchars($_SESSION['form-data']['name']) : ''; ?>" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" id="inputEmail" value="<?=$_POST['email'] ?>"
                placeholder="Введите Email"
                       value="<?=isset($_SESSION['form-data']['email']) ? htmlspecialchars($_SESSION['form-data']['email']) : ''; ?>" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="postalAddress">Логин:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="login" id="firstLogin" placeholder="Введите логин"
                       value="<?=isset($_SESSION['form-data']['login']) ? htmlspecialchars($_SESSION['form-data']['login']) : ''; ?>" required>
                <span class="has-error"><?php  ?></span>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="inputPassword">Пароль:</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password" id="inputPassword"
                       placeholder="Введите пароль" data-error="Введите не менее 3 символов" data-minlength="3"
                       required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="help-block with-errors"></div>
        </div>
        <br />
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Регистрация">
                <input type="reset" class="btn btn-default" value="Очистить форму">
            </div>
        </div>
    </form>
    <?php if (isset($_SESSION['form-data'])) unset($_SESSION['form-data']); ?>
</div>