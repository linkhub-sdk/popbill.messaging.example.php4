<?php

include 'common.php';

echo '장문문자 전송 테스트'.chr(10).'처리결과 : ' ;

$Messages = array();
	
$Messages[] = array(
	'snd' => '07075106766',	//발신자
	'rcv' => '11112222',	//수신자
	'rcvnm' => '수신자성명',	//수신자 성명
	'msg'	=> '개별 메시지 내용',	//개별 메시지 내용. 장문은 2000byte로 길이가 조정되어 전송됨.
	'sjt'	=> '개발 메시지 제목'	//개별 메시지 내용
);
	
//1000건까지 반복 가능
$Messages[] = array(
	'rcv' => '22223333',
	'rcvnm' => '수신자성명'
);
	
$result = $MessagingService->SendLMS('1231212312','07075106766','동보전송 장문제목','동보전송 장문 문자내용',$Messages,null,'userid');

var_dump($result);

echo chr(10);

?>
