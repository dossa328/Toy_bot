<?php
 
// 요청을 받아 저장
$data = json_decode(file_get_contents('php://input'), true);
 
// 받은 요청에서 content 항목 설정
$content = $data["content"];
 
 
 
// '시작하기' 버튼 처리
if( $content == "시작하기" )
{
echo <<< EOD
    {
        "message": {
            "text": "아직 개발중이라 대답을 잘 못해도 이해해줘^^;"
        }
    }
EOD;
}

 
?>
