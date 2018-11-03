<?php


//目前测试为只有com cn域名能够成功跳转到浏览器
//域名报毒的无法跳转
//将代码放在首页 或者 全局文件

$scriptpath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$sitepath = substr($scriptpath, 0, strrpos($scriptpath, '/'));
$siteurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $sitepath . '/';
if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !== !1 ) {
echo '<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>请使用浏览器打开</title>
  <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
  <script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "' . $siteurl . '"}); </script>
 </head>
 <body></body>
</html>';
exit;
}

?>
