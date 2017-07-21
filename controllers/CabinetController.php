<?php


class CabinetController {
    public function actionHello()
    {
        $userId = User::checkLogged();
        // Получаем информацию о пользователе из БД
       // $user = Cabinet::getUserById($userId);
        //Получаем имя пользователя
        $userName = Cabinet::getUserName($userId);  
       $user = User::getUserById($userId);
         
        require_once(ROOT . '/views/Hello/hello.php');
        return true;
       
    }
}
