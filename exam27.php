<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<?
$week = array('일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일');

echo "-다음 날짜의 요일을 함수를 이용하여 출력해보세요. '2019-05-02', '2020-04-14', '1987-12-28' <br /><br /><br />";

$day[1] = "2019-05-02";
$day[2] = "2020-04-14";
$day[3] = "1987-12-28";
$day_c =  count($day);

for($i = 1; $i <=$day_c; $i++){
	echo "$day[$i]은 ".$week[date('w', strtotime($day[$i]))];
	echo "<br />";
}
	echo "<br />";

echo "-다음 날짜의 5일 후, 2달 후, 191일 후, 2년 후의 날짜와 요일을 출력해보세요. '2019-04-15' <br /><br /><br />";
/*
$time = "2019-04-15";
echo date("Y-m-d",strtotime($time."now"))." ".$week[date('w', strtotime($time))]." 현재";
echo "<br />";
*/
$fived = date("Y-m-d",strtotime($time."+5 day"));
echo ($fived)." ".$week[date('w', strtotime($fived))]." 5일 후"; 
echo "<br />";

$twom =  date("Y-m-d",strtotime($time."+2 month"));
echo $twom." ".$week[date('w', strtotime($twom))]." 2달 후"; 
echo "<br />";

$oneno = date("Y-m-d",strtotime($time."+191 day"));
echo $oneno." ".$week[date('w', strtotime($oneno))]." 191일 후"; 
echo "<br />";

$twoy = date("Y-m-d",strtotime($time."+24 month"));
echo $twoy." ".$week[date('w', strtotime($twoy))]." 2년후"; 
echo "<br /><br />";

// checkbox 문제에 체크여부 확인하는 버튼 그거 눌렀을때 스크립트 동작시켜서 검사
echo "-아래 checkbox 들을 javascript 또는 jquery 를 이용하여 문제의 답을 출력해보세요.<br /><br />
	  1. checkbox 가 모두 체크되었는지 확인, 체크가 안되었다면 어떤 checkbox 가 체크되지 않았는지 alert 으로 표기(몇번째 박스인지 숫자를 표기)<br /><br />
	  2. checkbox 를 일괄 체크할 수 있는 기능 추가. 일괄 해제하는 버튼 추가(같은 버튼으로 추가. 하나 이상 체크되어 있는 경우에는 일괄 체크하는 기능으로)<br /><br />";
?>
<?
for($i=1; $i<= 30; $i++) {
?>
	<input type="checkbox" name="check_<?=$i?>" id="check_<?=$i?>" class="check" value="<?=$i?>" data-name="<?=$i?>번 박스" /><?=$i?>&nbsp;&nbsp;
	
<?
}

?>
<input type="button" name="check_btn" id="check_btn" value="확인" />

<input type="button" name="all_check_btn" id="all_check_btn" value="일괄 버튼" />

<script type="text/javascript">

var $i=1;
var $uncheckbox = "";
var $count=1;
$(document).ready(function(){
	
	$("#check_btn").click(function(){
		for($i=1;$i<=30;$i++){
			//""안에 변수 사용하기
			if($("input:checkbox[id=check_"+$i+"]").is(":checked")==false){
				$uncheckbox += $i + "번 ";
				//체크안된 박스 한번에 다 알려주기 추가
				}

		}
		if(!$uncheckbox==""){
					alert($uncheckbox+"이 체크가 안되었습니다.");
		}
		$uncheckbox = "";
	});

/*
	$("#check_btn").click(function(){
		for($i=1;$i<=30;$i++){
			console.log($("input:checkbox[id=check_"+$i+"]").val());

		}
	});
*/
	/*
	//일괄체크

	$("#all_check_btn").click(function(){ 
		for($i=1;$i<=30;$i++){
			if($("input:checkbox[id=check_"+$i+"]").is(":checked")==true){
				$count++;
			}
		}
		if($count==30){
				$("input[type=checkbox]").prop("checked",false); 
			}
		else
			$("input[type=checkbox]").prop("checked",true); 
		$count=0;
		});
*/
	$("#all_check_btn").click(function(){
		$("input[type=checkbox]").each(function($i){
			if($("input:checkbox[id=check_"+$i+"]").is(":checked")==true){
				$count++;
				
			}
		});
		if($count==30){
				$("input[type=checkbox]").prop("checked",false); 
			}
		else
			$("input[type=checkbox]").prop("checked",true); 
		$count=1;
    });
});
</script>