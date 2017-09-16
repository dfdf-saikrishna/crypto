<?php
global $app;
$mailsetting = unserialize(getSetting("mail"));

if($mailsetting['mailmode']=='smtp'){
$app['swiftmailer.options'] = array(
        'host' => $mailsetting["host"],
        'port' => $mailsetting["port"],
        'username' => $mailsetting["uname"],
        'password' => $mailsetting["pass"],
        'encryption' => null,
        'auth_mode' => 'login'
    );
}
