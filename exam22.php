<?
?>
<div style="margin-left:10px;">

<pre>22. 입력 버튼을 누르면 hidden 으로 입력되어 있는 값들이 모두 폼 안에 입력되도록 해보세요.(jquery 를 이용해보세요)
</pre>

<br /><br />

<input type="hidden" id="h_name" value="홍길동" />
<input type="hidden" id="h_hakbun" value="201912345" />
<input type="hidden" id="h_hakgua" value="소프트웨어공학과" />
<input type="hidden" id="h_grade" value="1학년" />
<input type="hidden" id="h_sex" value="남성" />
<input type="hidden" id="h_hakjum" value="4.5" />

이름 : <input type="text" id="name" class="input_form w100p" value="" /><br />
학번 : <input type="text" id="hakbun" class="input_form w100p" value="" /><br />
학과 : <input type="text" id="hakgua" class="input_form w100p" value="" /><br />
학년 : 
<select id="grade"><option value="">학년을 선택하세요</option>
	<option value="1학년">1학년</option>
	<option value="2학년">2학년</option>
	<option value="3학년">3학년</option>
	<option value="4학년">4학년</option>
	<option value="5학년">5학년</option>
</select><br />
성별 : 
<input type="radio" class="sex" name="sex1" value="남성" /> 남성 &nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="sex" name="sex2" value="여성" /> 여성 &nbsp;&nbsp;&nbsp;&nbsp;
<br />
학점 : <input type="text" id="hakjum" class="input_form w100p" value="" /><br />

<input type="button" id="start" value="입 력" />

<br /><br />


</div>

<script type="text/javascript">	
var interval_on = 0;

//var name = $("#h_name").val();
var hakbun = $("#h_hakbun").val();
var hakgua = $("#h_hakgua").val();
var grade = $("#h_grade").val();
var sex = $("#h_sex").val();
var hakjum = $("#h_hakjum").val();

$(document).ready(function(){   //	html 이 완전하게 로드된 후 스크립트를 실행하라는 명령. jquery 사용 시 보통 맨 첫번째로 작성해줍니다.
//	1. 변수에 hidden 값들을 받아놓고 각 input 에 알맞게 값을 넣어주세요.
//	2. select, radio 에 값을 넣을때는 값에 맞는 항목들이 선택되도록 해주세요.

	$("#start").on("click",function(){
		$("#name").val($("#h_name").val());
		
		$("#hakbun").val(hakbun);
		
		$("#hakgua").val(hakgua);
		
		$("#grade").val(grade);
		
		$(".sex").val(sex);

		$("#hakjum").val(hakjum);

		if(sex=="남성"){
			$('input:radio[name="sex1"][value="남성"]').attr('checked', 'checked');
		}
		else if(sex=="여성"){
			$('input:radio[name="sex2"][value="여성"]').attr('checked', 'checked');
		}
	});
});
</script> 