<?php

namespace app\controllers;

use app\models\Task;
use app\models\User;
use PDO;

class TaskController extends BaseController
{
    public function addAction()
    {
        if (!empty($_POST)) {
            $task = new Task();
            // registration user
            if (!User::authUser()) {
                $user = new User();
                $data = $_POST;
                $user->load($data);
                if (!$user->validation($data) || !$user->emailUnique()) {
                    $user->getErrors();
                    $_SESSION['form-data'] = $data;
                }else{
                    $user->attr['password'] = password_hash($user->attr['password'],PASSWORD_DEFAULT);
                    $user_id = $user->save('users');
                }
            }

            $data['user_id'] = isset($user_id) ? (int) $user_id : $_SESSION['user']['id'];
            $data['title'] = !empty($_POST['title']) ? trim($_POST['title']) : '';
            $data['description'] = !empty($_POST['description']) ? trim($_POST['description']) : '';
            if (!$task->validation($data)) {
                $task->getErrors();
                $_SESSION['form-data'] = $data;
            }else{
                Task::saveTask($data);
                $_SESSION['success'] = 'Задача успешно создана';
            }
            $_SESSION['success'] = 'Задача успешно создана';
            //header('Location: ' . PATH);
        }

        $this->setMeta('Добавление новой задачи');
    }

    public function editAction()
    {
        $tasks = new Task();
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $task = \R::findOne('tasks','id = ?',[$id]);
        $user = 'root';
        $pass = '';

        $publish = $_POST['publish'];
        $id_task = $_POST['id'];
        if (!empty($_POST)) {
            $pdo = new PDO('mysql:host=localhost;dbname=kinomonster', $user, $pass);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $data = [
              'publish' => $publish,
              'id' => $id_task,
            ];

            if (!$pdo) {
                $tasks->getErrors();
                $_SESSION['success'] = 'Ошибка редактирования';
                $_SESSION['form-data'] = $data;
            } else {
                $sql = "UPDATE tasks SET publish=:publish WHERE id=:id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute($data);

            }
            $_SESSION['success'] = 'Задача успешно отредактирована';

        }

        $pdo = null;

        $this->setMeta('Редактирование задачи');
        $this->res(compact('task'));
    }
}