<?php

include 'common.php';

echo '장/단문문자 전송 테스트'.chr(10).'처리결과 : ' ;

$Messages = array();
	
$Messages[] = array(
	'snd' => '07075106766',	//발신자
	'rcv' => '11112222',	//수신자, 필수
	'rcvnm' => '수신자성명',	//수신자 성명
	'msg'	=> '장문 메시지 내용 장문으로 보내는 기준은 메시지 길이을 기준으로 90byte이상입니다. 2000byte에서 길이가 조정됩니다.', //개별전송 메시지 내용
	'sjt'	=> '개발 메시지 제목'	//개별전송 제목
);
	
//1000건까지 반복 가능
$Messages[] = array(
	'rcv' => '22223333',
	'rcvnm' => '수신자성명',
	'msg'	=> '단문메시지',
);
	
$result = $MessagingService->SendXMS('1231212312','07075106766','동보전송 장문제목','동보전송 장문 문자내용',$Messages,null,'userid');

var_dump($result);

echo chr(10);

?>
