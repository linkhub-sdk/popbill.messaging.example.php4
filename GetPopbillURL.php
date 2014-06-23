<?php

include 'common.php';

echo '팝빌 기본 URL 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $MessagingService->GetPopbillURL('1231212312','userid','LOGIN');

var_dump($result);

echo chr(10);
?>
