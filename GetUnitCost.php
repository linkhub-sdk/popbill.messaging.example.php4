<?php

include 'common.php';

echo '전송 단가 확인 테스트'.chr(10).'처리결과 : ' ;

/*
*	ENumMessageType::SMS => 단문
*	ENumMessageType::LMS => 장문
*/
$result = $MessagingService->GetUnitCost('1231212312',MessageType_SMS);

var_dump($result);

echo chr(10);
?>
