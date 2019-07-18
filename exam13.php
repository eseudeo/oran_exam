<?

?>
<div style="margin-left:10px;">

<pre>13. 입력창에 숫자를 넣으면 해당 숫자로 구구단이 출력되도록 해보세요.(예> 7 입력시, 7단 출력)</pre>

<br /><br />
구구단을 외자 : <input type="text" name="input_number" id="input_number" style="width:30px;" /> 단은? <input type="button" value="구구단출력" onclick="gugudan();" />
<br /><br />
<div id="gugudan_div" style="border:1px solid #000; width:500px; height:500px; background-color:#dedede;">
<p id="gugu"></p>
</div>

</div>

<script type="text/javascript">
var interval_on = 0;

function gugudan() {
//	1. 반복문을 이용하세요.
//	2. 숫자가 없거나 1보다 작으면 출력하지말고 에러메세지를 주세요.
	var i;
	var input_num = document.getElementById("input_number").value;
	//var ggdan = document.getElementById("gugu").innerHTML;
	var ggdan = "";

	if(!input_num||input_num<1){
		alert("숫자를 다시 입력해주세요");
		input_num=" ";
		document.getElementById("input_number").focus();
		return false;
	}
	else if(input_num>=1){
	for(i=1;i<10;i++){
		ggdan += input_num+"*"+ i + "="+ input_num*i + "<br>";
	}	
		document.getElementById("gugu").innerHTML = ggdan;
	}
}

</script>