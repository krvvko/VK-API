<?php

function API() {

    $result =  (new DateTime())->diff(new DateTime('2020-11-20 12:35:54'));
    $result = "Я погромист уже: ".$result->m.' месяцев, '.$result->d.'д, '.$result->h.'ч, '.$result->i.'м.';


    $token        =     'your temp token';
    $params     =     [
        'access_token'    =>    $token,
        'text'            =>    $result,
        'v'                =>  5.122
    ];
    $params     =     http_build_query($params);

    $query         =     file_get_contents('https://api.vk.com/method/status.set?'.$params); //https://oauth.vk.com/authorize?client_id='your app id'&display=page&scope=status&response_type=token&v=5.122&state=123456
    $result     =     json_decode($query, true);
    print_r($result);

    sleep(60);
    header("Refresh:0");

}

API();
