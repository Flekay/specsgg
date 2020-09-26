

<?PHP

// MAIN API FUNCTION

function specsgg($profile, $game){

    if (!file_exists(dirname(__FILE__)."/config.php")) {

        echo 'config file cound not be found!';

        die;

    }else{

        require dirname(__FILE__)."/config.php";

        $response = loadspecs($profile, $game);

    }

    $load['settings'] = false;

    foreach ($qry['settings'] as $key => $value) {

        if ($value) {

            $load['settings'] = true;

        }

    }

    if (!$load['settings']) {

        return $response; 

    }else {

        if (!file_exists(dirname(__FILE__)."/games/".$game.".php")) {

            echo $game.' file cound not be found!';

            die;

        }else {

            require dirname(__FILE__)."/games/".$game.".php";

        }

        return $response;   

    }

}

// load profile settings

function loadspecs($profile, $game){

    require dirname(__FILE__)."/config.php";

    // DO NOT TOUCH

    $qry[0]['profile'] = $profile;

    $qry[0]['game'] = $game;

    $ar = ['0', 'settings', 'gear'];

    foreach ($ar as $a => $r) {

        foreach ($qry[$r] as $k => $v) {

            $q .= ((!empty($q))?'&':'').'q['.$r.']['.$k.']='.((is_bool($v))?(($v)?'true':'false'):$v);

        }

    }

    $url = 'https://api.specs.gg/v1/?'.$q;

    $cURL = curl_init();

    echo $url;

    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($cURL, CURLOPT_URL, $url);

    curl_setopt($cURL, CURLOPT_HTTPGET, true);

    curl_setopt($cURL, CURLOPT_HTTPHEADER, array(

        'Content-Type: application/json',

        'Accept: application/json'

    ));

    $result = curl_exec($cURL);

    curl_close($cURL);

    return json_decode($result,true); 

}



?>
