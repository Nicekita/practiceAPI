<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class AddDiv
{
    function sql() {
        header('Access-Control-Allow-Origin: http://frontend');
        $answer['error']=false;

        $dbconn = pg_connect("host=localhost port=5432 dbname=AMWbase user=postgres password=135713");
        $query = "select * from division";
        $result = pg_query($query) or $answer['error']=true;
        while ($stroka = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            if ($stroka['divisionid']==$_POST['divisionid'])
            {
                $answer['error']=true;
                return new Response(json_encode($answer));
            }
        }
        $query = "insert into division values('".$_POST['divisionid']."','".$_POST['divisionname']."')";
        pg_query($dbconn,$query) or die('Ошибка запроса: ' . pg_last_error());
        pg_close($dbconn);
        return new Response(json_encode($answer));
    }
}