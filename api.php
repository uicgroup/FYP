<?php
function activitiesList($service, $part, $params) {
    $params = array_filter($params);
    $response = $service->activities->listActivities(
        $part,
        $params
    );

    print_r($response);
}

activitiesList($service,
    'snippet,contentDetails', 
    array('71h-EolVr70' => 'UC_x5XG1OV2P6uZZ5FSM9Ttw', 'maxResults' => 25));


?>