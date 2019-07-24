<? ?>
<div style="margin-left:10px;">

<pre>12. 실행 버튼을 누르면 2초 후에 "실행" 이라는 경고창이 뜰 수 있게 해보세요. 
        이후 그 아래 반복실행 버튼을 눌렀을 때 회색박스에 1초에 한번씩 실행 이라는 글자가 출력되어서 쌓이도록 해보세요.</pre>

<br /><br />
<input type="button" value="실 행" onclick="confirm();" />
<br /><br />
<input type="button" value="반복실행" onclick="repeat();" />
<br /><br />
<div id="repeat_div" style="border:1px solid #000; width:500px; height:500px; background-color:#dedede;">
<p id="txt"> </p> 
</div>

</div>

<script type="text/javascript">
var interval_on = 0;

function confirm() {
//	1. 명령을 특정 시간 이후에 실행할 수 있게 하는 자바스크립트 함수를 이용하세요.
	setTimeout(function(){ alert("실행") }, 2000);
}

function check(){
	if(interval_on){
		return interval_on;
	}else{
		interval_on=1;
		return 0;
	}
}

function repeat() {
//	1. 명령을 특정 시간마다 반복하게 해주는 자바스크립트 함수를 이용하세요.
//	2. 버튼을 막 눌러도 최초 한번만 실행되도록 변수 interval_on 을 이용하세요.
	if(check()) 
		return;
		{
			setInterval(function(){document.getElementById("txt").innerHTML +="실행 "},1000);
		}
}
</script>