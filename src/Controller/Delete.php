<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class Delete
{
    function sql($header,$connectionstring) {
        header($header);
        $answer['error']=false;

        $dbconn = pg_connect($connectionstring);
        $query = "Delete from events where eventid='".$_POST['eventid']."'";
        pg_query($dbconn,$query) or $answer['error']=true;;
        pg_close($dbconn);
        return new Response(json_encode($answer));
    }
}