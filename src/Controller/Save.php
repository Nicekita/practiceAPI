<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class Save
{
    function sql($year,$semestr,$header,$connectionstring) {
        $answer['error']=false;
        header($header);
        if (isset($_POST['eventtypename'])&&isset($_POST['divisionname'])&&isset($_POST['eventid'])&&isset($_POST['eventname'])&&isset($_POST['eventplace'])&&isset($_POST['eventdate'])&&isset($_POST['teacher'])&&isset($_POST['usermax'])&&isset($_POST['addinfo'])) {

            $dbconn = pg_connect($connectionstring);
            $query = "select * from eventtype";

            $result = @pg_query($query) or $answer['error'] = true;
            while ($stroka = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                if ($stroka['eventtypename'] == $_POST['eventtypename']) {
                    $eventtypeid = $stroka['eventtypeid'];
                }
            }
            $query = "select * from division";
            $result = @pg_query($query) or $answer['error'] = true;
            while ($stroka = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                if ($stroka['divisionname'] == $_POST['divisionname']) {
                    $divisionid = $stroka['divisionid'];
                }
            }
            $query = "insert into events values('" . $_POST["eventid"] . "','" . $_POST["eventname"] . "','" . $_POST["eventplace"] . "','" . $_POST["eventdate"] . "','" . $_POST["teacher"] . "'," . $_POST["usermax"] . ",'" . $eventtypeid . "','" . $_POST["addinfo"] . "','" . $divisionid . "',".$year.",".$semestr.")";
            if (@pg_query($query)==false){$answer['error'] = true;  return new Response(json_encode($answer)); }
            else {
                $result = @pg_query($dbconn, $query) or $answer['error'] = true;
                pg_close($dbconn);
                $answer['error'] = false;
            }
        } else $answer['error']=true;
            return new Response(json_encode($answer));
}
    }
