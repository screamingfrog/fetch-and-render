<html>
<head><title>Fetch &amp; Render Proxy</title>
</head>

<body style="margin:0px;padding:0px">

<?php

$types = array("mobile", "desktop");

$url = isset($_GET['url']) ? $_GET['url'] : "http://www.example.com/";
$type = isset($_GET['type']) ? $_GET['type'] : "desktop";

$mobile = $type == "mobile";
$width = $mobile ? 411 : 1024;
$height = 10000;

?>

<iframe src="<?php echo $url; ?>" frameborder="0" style="overflow:hidden;height:<?php echo $height;?>;width:<?php echo $width;?>" height="<?php echo $height;?>" width="<?php echo $width;?>"></iframe>

</script>

</body>

</html>

