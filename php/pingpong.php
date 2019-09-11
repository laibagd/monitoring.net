<?php



function pingAddress($ip) {
    $pingresult = exec("/bin/ping -c2 -w2 $ip", $outcome, $status);
    if ($status==0) {
        $status = "alive";
    } else {
        $status = "dead";
    }
    $ip .= '<div id="dialog-block-left">';
    $ip .= '<div id="ip-status">The IP address, '.$ip.', is  '.$status.'</div><div style="clear:both"></div>';
    return $ip;
}
// Some IP Address
pingAddress("192.168.1.1");