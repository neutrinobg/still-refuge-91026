<pre>
<?php
$params = $_GET;
print_r($params);
$original_url = urldecode($params['original-url']);
sprintf("Original URL: %s", $original_url);
?>
</pre>
