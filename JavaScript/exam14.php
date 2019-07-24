<?
?>

<div style="margin-left:10px;">

	<pre>14. 입력창 두개에 각각 숫자를 입력받아서 둘 중 큰 숫자를 작은 숫자로 나누고, 나눈 값을 소수점 둘째자리까지만 출력하게 해보세요.(반올림으로)
		숫자 출력 후 아래쪽에 가로세로가 출력값 크기인 정사각형을 하나 그려보세요.(border 이용)
	</pre>

	<br /><br />
	첫번째 숫자 : <input type="text" name="input_number1" id="input_number1" style="width:30px;" /><br />
	두번째 숫자 : <input type="text" name="input_number2" id="input_number2" style="width:30px;" /><br />
	<input type="button" value="입력하기" onclick="draw_square();" />
	<br /><br />
	
	<div id="draw_div"></div>
	
	<div id="box"></div>
	
</div>


<script type="text/javascript">
var interval_on = 0;

function draw_square() {
//	1. 분기문을 이용하세요.
//	2. 숫자가 1보다 작거나 숫자가 아닌 경우 계산하지 말고 경고창을 띄우고 끝내세요.
//	3. 정사각형 그릴 때는 추가로 div를 만들고 style 을 추가해서 그리세요.
	var input_num1 = Number(document.getElementById("input_number1").value);
	var input_num2 = Number(document.getElementById("input_number2").value);
	var result;
	var leng;
	var rect = document.getElementById("box");

	if(!input_num1||isNaN(input_num1)==true){
		alert("error");
		return false;
	}

	 if(!input_num2||isNaN(input_num2)==true){
		alert("error");
		return false;
	 }
	 
	 if(input_num1 > input_num2){
		 if(input_num2!==0){
			result = input_num1 / input_num2;
		}
	 }

	 if(input_num1 < input_num2){
		 if(input_num1!==0){
			result = input_num2 / input_num1;
		}
	 }
	document.getElementById("draw_div").innerHTML = result.toFixed(2);
	
	leng = result.toFixed(2);

	rect.style.width = leng +'px';
	rect.style.height = leng+'px';
	rect.style.border = "2px solid";
}
</script>