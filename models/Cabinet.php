<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cabinet
 *
 * @author admin
 */
class Cabinet {
    public static function getUserName($userId) {
       $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE id=' .$userId;
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_INT);
        $result->execute();
        $user = $result->fetch();
        if ($user) {
            return $user['name'];
        }
        return false;
    }
public static function getUserEmail($userId) {
     $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE id=' .$userId;
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->execute();
        $user = $result->fetch();
        if ($user) {
            return $user['email'];
        }
        return false;
}
}
