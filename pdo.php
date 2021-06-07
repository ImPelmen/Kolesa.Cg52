<?php
class PDOKolesa 
{
    private static $instance = null;

    private function __construct()
    {
        
    }

    public function makePdo()
    {
        if (self::$instance === null) {
            $host = '127.0.0.1';//Наш хост(может быть хост сервера)
            $db   = 'cg_52_kolesa';//название нашей базы данных
            $user = 'admin';//от имени кого мы обращаемся к БД
            $pass = '8777377vip';//Пароль для доступа
            $charset = 'utf8';//какую символику мы используем

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];//массив из статичных переменных класса PDO который является static(то есть нелльзя изменить после одного задания)
            self::$instance = new PDO($dsn, $user, $pass, $opt);//это наш первый пункт(Подключение)
        }

        return self::$instance;
    }
}