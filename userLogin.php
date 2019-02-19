<pre>
<?php
$params = $_GET;
print_r($params);
$original_url = $params['original-url'];
$original_url_arr = parse_url($original_url);
print_r($original_url_arr);
parse_str($original_url_arr['query'], $original_url_params);
$scope = $original_url_params['scope'];
echo sprintf("Scope: %s%s", $scope, "\r\n");
$original_url_params['username'] = 'bob';
$original_url_params['confirmation'] = 'bob';
$original_url_arr['query'] = http_build_query($original_url_params);

$original_url = sprintf("%s://%s%s?%s", $original_url_arr['scheme'], $original_url_arr['host'], $original_url_arr['path'], $original_url_arr['query']);
?>
</pre>
<p><?= sprintf("Original URL: %s", $original_url); ?></p>
<p><a href="<?= $original_url ?>">Confirm</a></p>
