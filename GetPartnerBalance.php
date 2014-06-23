<?php

include 'common.php';

echo '파트너 잔여 통합포인트 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $MessagingService->GetPartnerBalance('1231212312');

var_dump($result);

echo chr(10);
?>
