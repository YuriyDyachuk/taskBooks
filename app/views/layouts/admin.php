<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="utf-8">
    <?=$this->getMeta() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->
</head>
<body class="infobar-offcanvas">
<header id="topnav" class="navbar navbar-midnightblue navbar-fixed-top clearfix">

	<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
		<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
	</span>

    <a class="navbar-brand" href="<?= PATH ?>"></a>

    <ul class="nav navbar-nav toolbar pull-right">

        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-user"></i></span></a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="user/logout"><span class="pull-left">Выйти</span> <i class="pull-right fa fa-sign-out"></i></a></li>
            </ul>
        </li>

    </ul>

</header>

<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-midnightblue">
            <div class="static-sidebar">
                <div class="sidebar">
                    <div class="widget stay-on-collapse" id="widget-welcomebox">
                        <div class="widget-body welcome-box tabular">
                            <div class="tabular-row">
                                <div class="tabular-cell welcome-avatar">
                                    <a><img src="http://placehold.it/300&text=Placeholder" class="avatar"></a>
                                </div>
                                <div class="tabular-cell welcome-options">
                                    <span class="welcome-text">Добро пожаловать</span>
                                    <a class="name"><?php echo $_SESSION['user']['name'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                            <ul class="acc-menu">
                                <li><a href="<?=ADMIN?>"><i class="fa fa-home"></i><span>Home</span></a></li>
                                <li><a href="<?=ADMIN?>/task"><i class="fa
                                fa-shopping-cart"></i><span>Задачи</span></a></li>
                                <li><a href="<?=ADMIN?>/user"><i class="fa
                                fa-user"></i><span>Пользователи</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
      <div class="static-content-wrapper">
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
          <?=$content; ?>
          <footer role="contentinfo">
          <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
              <li><h6 style="margin: 0;"> &copy; 2020 TaskBook-online.com</h6></li>
            </ul>
            <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
          </div>
        </footer>
      </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->

</body>
</html>