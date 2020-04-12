<div class="container-fluid">
    <h2>Вход</h2>
    <form class="form-horizontal" action="user/login" method="post" data-toggle="validator">
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="postalAddress">Логин:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="login" id="firstName" placeholder="Введите логин"
                       value="<?=isset($_SESSION['form-data']['login']) ? htmlspecialchars
                       ($_SESSION['form-data']['login']) : ''; ?>" required>
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="inputPassword">Пароль:</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password" id="inputPassword"
                       placeholder="Введите пароль" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
        <br />
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Войти">
                <input type="reset" class="btn btn-default" value="Очистить форму">
            </div>
        </div>
    </form>
</div>