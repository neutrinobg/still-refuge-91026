<pre>
<?php
$params = $_GET;
print_r($params);
$original_url = $params['original-url'];
$original_url_arr = parse_url($original_url);
print_r($original_url_arr);
$original_url_params = urldecode($original_url_arr['query']);
$original_url_params .= '&username=bob&confirmation=bob';
$original_url_params = urlencode($original_url_params);
$original_url = sprintf("%s://%s%s?%s", $original_url_arr['scheme'], $original_url_arr['host'], $original_url_arr['path'], $original_url_params);
?>
</pre>
<p><?= sprintf("Original URL: %s", $original_url); ?></p>
<p><a href="<?= $original_url ?>">Confirm</a></p>
