<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6"><h3>Список задач</h3></div>
      <div class="col-md-6">
        <a href="task/add">
          <button class="btn btn-primary pull-right">Добавить новую задачу</button>
        </a>
      </div>
    </div>
    <hr>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Имя</th>
        <th>E-mail</th>
        <th>Логин</th>
        <th>Описание задачи</th>
        <th>Содержание задачи</th>
        <th>Статус</th>
      </tr>
      </thead>
      <tbody>

      <?php foreach($tasks as $task): ?>
        <tr>
          <td><?=$task['name']?></td>
          <td><?=$task['email']?></td>
          <td><?=$task['login']?></td>
          <td><?=$task['title']?></td>
          <td><?=$task['description']?></td>
          <?php if ($task['publish'] == 1): ?>
            <td><mark>В ожидании</mark></td>
            <?php else: ?>
            <td style="color: green">Выполнено</td>
          <?php endif; ?>
        </tr>
      <?php endforeach; ?>


      </tbody>
    </table>
  </div>
  <div class="text-center">
    <?php if ($pagination->countPages > 1) : ?>
      <?=$pagination; ?>
    <?php endif; ?>
  </div>
</main>