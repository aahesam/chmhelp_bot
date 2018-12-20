<?php
$API_KEY = '751222329:AAFtXgIeRwPNZCh1plOec1dv5ULeb0pwXoQ';
$hook_url = 'https://aaahesam.000webhostapp.com/wateri/wateri/set.php';
$hok="https://api.telegram.org/bot$API_KEY/setWebhook?url=$hook_url";
echo file_get_contents($hok);

?>
