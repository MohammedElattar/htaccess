<?php
$css =  "css/";
$js =  "js/";
if (@$_GET['reset']) {
    $handle = fopen(".htaccess", 'w');
    fwrite($handle, '');
    fclose($handle);
}
