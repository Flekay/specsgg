<?php
if ($qry['settings']['mouse']) {
         if ($response['settings']['mouse']['4'] == '0') {
        $response['settings']['mouse']['4'] = "125";
    }elseif ($response['settings']['mouse']['4'] == '1') {
        $response['settings']['mouse']['4'] = "250";
    }elseif ($response['settings']['mouse']['4'] == '2') {
        $response['settings']['mouse']['4'] = "500";
    }elseif ($response['settings']['mouse']['4'] == '3') {
        $response['settings']['mouse']['4'] = "1000";
    }
}
if ($qry['settings']['keybinds']) {
    if ($response['settings']['keybinds']['0'] == '1') {
        $response['settings']['keybinds']['0'] = "TOGGLE";
    }else {
        $response['settings']['keybinds']['0'] = "HOLD";
    }
}
if ($qry['settings']['video']) {
         if ($response['settings']['video']['20'] == '0') {
        $response['settings']['video']['20'] = "1:1";
    }elseif ($response['settings']['video']['20'] == '1') {
        $response['settings']['video']['20'] = "4:3";
    }elseif ($response['settings']['video']['20'] == '2') {
        $response['settings']['video']['20'] = "5:3";
    }elseif ($response['settings']['video']['20'] == '3') {
        $response['settings']['video']['20'] = "16:9";
    }elseif ($response['settings']['video']['20'] == '4') {
        $response['settings']['video']['20'] = "16:10";
    }elseif ($response['settings']['video']['20'] == '5') {
        $response['settings']['video']['20'] = "21:9";
    }

         if ($response['settings']['video']['4'] == '0') {
        $response['settings']['video']['4'] = "FULLSCREEN";
    }elseif ($response['settings']['video']['4'] == '1') {
        $response['settings']['video']['4'] = "WINDOW MODE";
    }elseif ($response['settings']['video']['4'] == '2') {
        $response['settings']['video']['4'] = "BORDERLESS";
    }

         if ($response['settings']['video']['2'] == '0') {
        $response['settings']['video']['2'] = "NORMAL";
    }elseif ($response['settings']['video']['2'] == '1') {
        $response['settings']['video']['2'] = "DEUTERANOPIA";
    }elseif ($response['settings']['video']['2'] == '2') {
        $response['settings']['video']['2'] = "PROTANOPIA";
    }elseif ($response['settings']['video']['2'] == '3') {
        $response['settings']['video']['2'] = "TRITANOPIA";
    }
    $vlmhu = ['16', '13', '19', '21', '9', '17', '3'];
    foreach ($vlmhu as $key => $value) {
        if ($response['settings']['video'][$value] == '0') {
            $response['settings']['video'][$value] = "VERY LOW";
        }elseif ($response['settings']['video'][$value] == '1') {
            $response['settings']['video'][$value] = "LOW";
        }elseif ($response['settings']['video'][$value] == '2') {
            $response['settings']['video'][$value] = "MEDIUM";
        }elseif ($response['settings']['video'][$value] == '3') {
            $response['settings']['video'][$value] = "HIGH";
        }elseif ($response['settings']['video'][$value] == '4') {
            $response['settings']['video'][$value] = "ULTRA";
        }
    }

    if ($response['settings']['video']['7'] == '1') {
        $response['settings']['video']['7'] = "ENABLED";
    }else {
        $response['settings']['video']['7'] = "DISABLED";
    }

    if ($response['settings']['video']['15'] == '1') {
        $response['settings']['video']['15'] = "ENABLED";
    }else {
        $response['settings']['video']['15'] = "DISABLED";
    }

    if ($response['settings']['video']['14'] == '1') {
        $response['settings']['video']['14'] = "ON";
    }else {
        $response['settings']['video']['14'] = "OFF";
    }

         if ($response['settings']['video']['8'] == '0') {
        $response['settings']['video']['8'] = "&lt;60hz";
    }elseif ($response['settings']['video']['8'] == '1') {
        $response['settings']['video']['8'] = "60hz";
    }elseif ($response['settings']['video']['8'] == '2') {
        $response['settings']['video']['8'] = "75hz";
    }elseif ($response['settings']['video']['8'] == '3') {
        $response['settings']['video']['8'] = "85hz";
    }elseif ($response['settings']['video']['8'] == '4') {
        $response['settings']['video']['8'] = "100hz";
    }elseif ($response['settings']['video']['8'] == '5') {
        $response['settings']['video']['8'] = "120hz";
    }elseif ($response['settings']['video']['8'] == '6') {
        $response['settings']['video']['8'] = "144hz";
    }elseif ($response['settings']['video']['8'] == '7') {
        $response['settings']['video']['8'] = "160hz";
    }elseif ($response['settings']['video']['8'] == '8') {
        $response['settings']['video']['8'] = "165hz";
    }elseif ($response['settings']['video']['8'] == '11') {
        $response['settings']['video']['8'] = "180hz";
    }elseif ($response['settings']['video']['8'] == '9') {
        $response['settings']['video']['8'] = "240hz";
    }elseif ($response['settings']['video']['8'] == '10') {
        $response['settings']['video']['8'] = "&gt;240hz";
    }

         if ($response['settings']['video']['6'] == '0') {
        $response['settings']['video']['6'] = "BLACK";
    }elseif ($response['settings']['video']['6'] == '1') {
        $response['settings']['video']['6'] = "WHITE";
    }elseif ($response['settings']['video']['6'] == '2') {
        $response['settings']['video']['6'] = "GREEN";
    }elseif ($response['settings']['video']['6'] == '3') {
        $response['settings']['video']['6'] = "BLUE";
    }elseif ($response['settings']['video']['6'] == '4') {
        $response['settings']['video']['6'] = "RED";
    }elseif ($response['settings']['video']['6'] == '5') {
        $response['settings']['video']['6'] = "YELLOW";
    }elseif ($response['settings']['video']['6'] == '6') {
        $response['settings']['video']['6'] = "ORANGE";
    }elseif ($response['settings']['video']['6'] == '7') {
        $response['settings']['video']['6'] = "PURPLE";
    }elseif ($response['settings']['video']['6'] == '8') {
        $response['settings']['video']['6'] = "PINK";
    }elseif ($response['settings']['video']['6'] == '9') {
        $response['settings']['video']['6'] = "BABY BLUE";
    }elseif ($response['settings']['video']['6'] == '10') {
        $response['settings']['video']['6'] = "BROWN";
    }elseif ($response['settings']['video']['6'] == '11') {
        $response['settings']['video']['6'] = "NONE";
    }
}

?>