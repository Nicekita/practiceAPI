<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class Sql
{
    function select($header,$connectionstring)
{
    header($header);
    if (isset($_POST['login'])) {

        $dbconn = pg_connect($connectionstring)
        or die('Не удалось соединиться: ' . pg_last_error());;
// Выполнение SQL-запроса
        $login['auth'] = 0;
        $query = 'SELECT * FROM users';
        $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
        $int = 0;
// Вывод результатов в HTML
        while ($stroka = pg_fetch_array($result, null, PGSQL_ASSOC)) {

            if ($stroka['login'] == $_POST['login']&& password_verify(htmlspecialchars($_POST['password']), $stroka['pass']) )
            {
                $login['auth'] = 1;
            }

        }
// Очистка результата


// Закрытие соединения
        pg_close($dbconn);

        return new Response(json_encode($login));
    }

}
}