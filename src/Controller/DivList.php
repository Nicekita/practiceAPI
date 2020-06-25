<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DivList
{
function select($header,$connectionstring)
{
    if (isset($_POST['table'])) {
        header($header);
        $dbconn = pg_connect($connectionstring)
        or die('Не удалось соединиться: ' . pg_last_error());;
// Выполнение SQL-запроса
        $query = 'SELECT * FROM '.$_POST['table'];
        $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
        $int = 0;
// Вывод результатов в HTML
        while ($stroka[$int] = pg_fetch_array($result, null, PGSQL_ASSOC)) {

            $int = $int + 1;

        }
// Очистка результата


// Закрытие соединения
        pg_close($dbconn);

        return new Response(json_encode($stroka));
    }
}
}