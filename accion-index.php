<?php

$ci = curl_init();
$url = "";
curl_setopt($ci, CURLOPT_URL, $url);
curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ci);
if (curl_errno($ci)) {
    echo 'Error: ' . curl_error($ci);
} else {
    echo '<script> var data = $result </script>';
}
?>