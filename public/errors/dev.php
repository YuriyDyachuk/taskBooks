<!DOCTYPE HTML>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <style type="text/css">
    body{
      font-family:Arial, Helvetica, sans-serif;
    }
    .wrap{
      width:1000px;
      margin:0 auto;
      background:#fff;
    }
  </style>

</head>
<body>
<div class="wrap">
  <h2 style="text-align: center">Произошла ошибка</h2>
  <p><b>Код ошибки</b><?= $errNo ?></p>
  <p><b>Текст ошибки</b><?= $errStr ?></p>
  <p><b>Файл ошибки</b><?= $errFile ?></p>
  <p><b>Строка ошибки</b><?= $errLine ?></p>
</div>

</body>
</html>
