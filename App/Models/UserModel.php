<?php
namespace App\Models;
use Core;
use PDO;
//include_once 'Core/Model.php';
class UserModel extends Core\Model
{
    protected $storageFilePath = 'jsons/users.json';
    protected $attributes = [
        'login', 'name', 'surname', 'birthdate', 'email', 'address', 'id'
        //
    ];
    protected $table = 'users';



    function validate($attribute, &$errors)
    {
        $isValid = true;
        //Начало валидации
        if (!$attribute['login'] || strlen($attribute['login']) < 5 || strlen($attribute['login']) > 20) {
            $isValid = false;
            $errors['login'] = 'Поле "Логин" обязательно и должно содержать от 5 до 20 символов';
        }
        if (!$attribute['name']) {
            $isValid = false;
            $errors['name'] = 'Поле "Имя" обязательно';
        }

        if (!$attribute['birthdate']) {
            $isValid = false;
            $errors['birthdate'] = '"Дата рождения" введена некорректно';

        }
        // Конец валидации

        return $isValid;

    }
}


