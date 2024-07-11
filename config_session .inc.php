<?php

ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);
session_set_cookies_params([
    'lifetime'=>1800,
    'domain'=>'localhost',
    'path' => '/',
    'secure'=> true,
    'httponly'=> true
]);
session_start();

if (!isset($_session["last_regeneration"])) {
    session_regenerate_id();
    $_session["last_regeneration"] = time();
}else{
    $interval = 60 * 30;
    if(time()-$session["last_regeneration"] >= $interval) {
        session_regenerate_id();
        $_session["last_regeneration"] = time();
        

    }

}
function regenerate_session_id(){
    session_regenarate_id();
}