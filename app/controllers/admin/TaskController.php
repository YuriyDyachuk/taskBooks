<?php

namespace app\controllers\admin;

use PDO;
use RedBeanPHP\R;
use taskBooks\libs\Pagination;

class TaskController extends BaseController
{
    public function indexAction()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 5;
        $count = R::count('tasks');
        $pagination = new Pagination($page,$perpage,$count);
        $start = $pagination->getStart();

        $tasks = R::getAll("SELECT `tasks`.`id`,`tasks`.`title`,`tasks`.`description`,`tasks`.`publish`,`tasks`.`created_at`,`users`.`name`,`users`.`email` FROM `tasks`,`users` WHERE `tasks`.`user_id` = `users`.`id` GROUP BY `tasks`.`id` ORDER BY `tasks`.`id` LIMIT $start,$perpage");

        $this->setMeta('Список записей задач');
        $this->res(compact('tasks' ,'pagination','count'));
    }

    public function editAction()
    {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $task = R::findOne('tasks','id = ?',[$id]);
        $user = 'root';
        $pass = '';

        $title = $_POST['title'];
        $desc = $_POST['description'];
        $publish = $_POST['publish'];
        $id_task = $_POST['id'];
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=kinomonster', $user, $pass);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $data = [
              'title' => $title,
              'description' => $desc,
              'publish' => $publish,
              'id' => $id_task,
            ];
            $sql = "UPDATE tasks SET title=:title, description=:description, publish=:publish WHERE id=:id";
            $stmt= $pdo->prepare($sql);
            $stmt->execute($data);

            // echo a message to say the UPDATE succeeded
            $_SESSION['success'] = 'Задача успешно отредактирована';
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        $pdo = null;

        $this->setMeta('Редактирование задачи');
        $this->res(compact('task'));
    }
}