<?php

include 'common.php';

echo '연동회원 잔여포인트 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $MessagingService->GetBalance('1231212312');

var_dump($result);

echo chr(10);
?>
