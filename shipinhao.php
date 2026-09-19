<?php
$target = "https://api.zhuceka.cn";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- meta标签0秒立即跳转 -->
    <meta http-equiv="refresh" content="0; url=<?php echo $target; ?>">
    <title>跳转</title>
</head>
<body>
    <script>
        // JS兜底跳转
        window.location.href = "<?php echo $target; ?>";
    </script>
    正在跳转...<a href="<?php echo $target; ?>">点击访问</a>
</body>
</html>