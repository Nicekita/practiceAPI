<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class Edit
{
    function sql() {
        header('Access-Control-Allow-Origin: http://frontend');
        $answer['error']=false;
        if (isset($_POST['eventtypename'])&&isset($_POST['divisionname'])&&isset($_POST['eventid'])&&isset($_POST['eventname'])&&isset($_POST['eventplace'])&&isset($_POST['eventdate'])&&isset($_POST['teacher'])&&isset($_POST['usermax'])&&isset($_POST['addinfo'])) {

            $dbconn = pg_connect("host=localhost port=5432 dbname=AMWbase user=postgres password=135713");
            $query = "select * from eventtype";
            $result = pg_query($query) or $answer['error'] = true;;
            while ($stroka = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                if ($stroka['eventtypename'] == $_POST['eventtypename']) {
                    $eventtypeid = $stroka['eventtypeid'];
                }
            }
            $query = "select * from division";
            $result = pg_query($query) or $answer['error'] = true;;
            while ($stroka = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                if ($stroka['divisionname'] == $_POST['divisionname']) {
                    $divisionid = $stroka['divisionid'];
                }
            }
            $query = "UPDATE events set eventname='" . $_POST["eventname"] . "', eventplace='" . $_POST["eventplace"] . "',eventdate='" . $_POST["eventdate"] . "',teacher='" . $_POST["teacher"] . "',usermax=" . $_POST["usermax"] . ",eventtypeid='" . $eventtypeid . "',addinfo='" . $_POST["addinfo"] . "',divisionid='" . $divisionid . "',eventyear=2020,eventsemestr=2 where eventid='" . $_POST["eventid"] . "'";
            @pg_query($dbconn, $query) or $answer['error'] = true;;
            pg_close($dbconn);
            return new Response(json_encode($answer));
        }
        else {
            $answer['error'] = true;
            return new Response(json_encode($answer));
        }
    }
}