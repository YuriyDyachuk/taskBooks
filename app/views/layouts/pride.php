<!DOCTYPE html>
<html>
<head>
    <?=$this->getMeta() ?>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="" type="image/png">
    <!-- pop-up -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
</head>
<!--/main-header-->
<base href="/">
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <h1><a  href="<?php PATH; ?>"><span>TaskBook - </span>online<span></a></h1>
                        <h5><i class="fa fa-phone" aria-hidden="true"></i> (+000) 009 455 4088</h5>
                    </div>
                    <div class="right-look">
                        <ul>
                            <?php if (!empty($_SESSION['user'])) : ?>
                                <li><a href="" class="login">Добро пожаловать <?php echo $_SESSION['user']['name']; ?> </a></li>
                                <li><a href="user/logout" class="login reg">Выход</a></li>
                            <?php else: ?>
                                <li><a href="user/login" class="login">Вход</a></li>
                                <li><a href="user/register" class="login reg">Регистрация</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!--//main-header-->

    <!-- content pride -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?=$content ?>
    <!-- end content pride -->

    <!--/footer-bottom-->
    <div class="contact-footer">
        <div class="footer">
            <h5>Copiration @ 2020</h5>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<script>
    let path = '<?= PATH ?>';
</script>
<!--end-smooth-scrolling-->
<script src="js/bootstrap.js"></script>
<script src="js/validator.js"></script>
<script src="js/typeahead.bundle.js"></script>
</body>
</html>