<html>
<head><title>Fetch &amp; Render Proxy</title>
</head>

<body>

<?php

$types = array("mobile", "desktop");

$url = isset($_GET['url']) ? $_GET['url'] : "http://www.example.com/";
$type = isset($_GET['type']) ? $_GET['type'] : "desktop";

$mobile = $type == "mobile";
$width = $mobile ? 411 : 1024;
$height = $mobile ? 731 : 768;

echo "Fetch &amp; Render of: $url (" . ucwords($type) . " @ $width x $height)<br><br>";
?>

<iframe src="<?php echo $url; ?>" height='<?php echo $height; ?>' width='<?php echo $width; ?>'></iframe>

</body>

</html>

