<?
?>
<div style="margin-left:10px;">

<pre>21. 간단하게 jquery 의 기본 문법을 학습해봅시다.(기존 실습했던 기능을 jquery 를 이용해서 만들어보기)
	(1) exam1, exam3 의 문제를 jquery 문법에 맞춰서 변형해보세요.
</pre>

<br /><br />

<h4>exam1</h4>
<input type="button" value="문 열기" id="open" style="border:1px solid #000;">
</input>&nbsp;&nbsp;

<input type="button" value="문 닫기" id="close" style="border:1px solid #000;">
</input>
<br /><br />

<div id="door">
  창문
</div>

<br /><br />

<h4>exam3</h4>

<img src="image/Penguins.jpg" id="penguin" width="200px" />


</div>

<script type="text/javascript">
var interval_on = 0;

$(document).ready(function(){   //	html 이 완전하게 로드된 후 스크립트를 실행하라는 명령. jquery 사용 시 보통 맨 첫번째로 작성해줍니다.
	// html 엘리먼트 중 id 가 open 으로 선언된 엘리먼트가 클릭되었을 때 아래 내용을 실행해라 라는 의미로 생각하면 됩니다. 자바스크립트에서 onclick 시에 미리 만들어진 함수를 불러오는 기능과 동일하며 자체 function 외에 외부에서 만들어놓은 function 을 넣는것도 가능합니다.
	$("#open").on("click", function(){	
		//	innerHTML 과 같은 기능. ID 를 호출할 때는 # 를 이용하고, CLASS 를 호출할 때는 . 을 이용합니다.
		$("#door").html("창문 열림");
	});

	$("#close").on("click", function(){	
		//	innerHTML 과 같은 기능. ID 를 호출할 때는 # 를 이용하고, CLASS 를 호출할 때는 . 을 이용합니다.
		$("#door").html("창문 닫힘");
	});
});

$(document).ready(function(){
	$("#penguin").on("click",function(){
		$("#penguin").attr("src","image/Tulips.jpg");
	});
});
</script> 