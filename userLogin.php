<pre>
<?php
$params = $_GET;
print_r($params);
$original_url = urldecode($params['original-url']);
$original_url .= '&username=bob&confirmation=bob';
$original_url = urlencode($original_url);
?>
</pre>
<p><?= sprintf("Original URL: %s", $original_url); ?></p>
<p><a href="<?= $original_url ?>">Confirm</a></p>
