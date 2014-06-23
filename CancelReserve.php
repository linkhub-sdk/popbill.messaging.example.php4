<?php

include 'common.php';

echo '예약전송건 취소 테스트'.chr(10).'처리결과 : ' ;

//접수번호
$ReceiptNum = '014042114000000005';
	
$result = $MessagingService->CancelReserve('1231212312',$ReceiptNum,'userid');

var_dump($result);

echo chr(10);

?>
