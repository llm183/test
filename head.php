<?php


//Ŀǰ����Ϊֻ��com cn�����ܹ��ɹ���ת�������
//�����������޷���ת
//�����������ҳ ���� ȫ���ļ�

$scriptpath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$sitepath = substr($scriptpath, 0, strrpos($scriptpath, '/'));
$siteurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $sitepath . '/';
if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !== !1 ) {
echo '<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>��ʹ���������</title>
  <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
  <script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "' . $siteurl . '"}); </script>
 </head>
 <body></body>
</html>';
exit;
}

?>
