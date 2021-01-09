<?php
/*session_start();
include("connect_db.php");
//include("frame.php");*/

$db = new PDO('mysql:host=localhost;dbname=db-internship', 'root', '');

    $req_events = $db->query("select * from event");
    $result_events = $req_events->fetchAll();

    $data = array();
    foreach ($result_events as $row){
    $data[] = array(
            'id'        => $row["session_id"],
            'title'     => $row["session_title_fr"],
            'start'     => $row["start_date"],
            'end'       => $row["end_date"]
        );
    }

    
    echo json_encode($data);
?>