<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class Delete
{
    function sql() {
        header('Access-Control-Allow-Origin: http://frontend');
        $answer['error']=false;

        $dbconn = pg_connect("host=localhost port=5432 dbname=AMWbase user=postgres password=135713");
        $query = "Delete from events where eventid='".$_POST['eventid']."'";
        pg_query($dbconn,$query) or $answer['error']=true;;
        pg_close($dbconn);
        return new Response(json_encode($answer));
    }
}