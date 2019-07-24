<?
?>

<div style="margin-left:10px;">

<pre>16. 입력란에 숫자(자연수)를 넣으면 이진수로 변환하여 출력되도록 해보세요.
</pre>

<br /><br />

입력 : <input type="text" name="input_num" id="input_num" style="width:100px;" /><br />
<input type="button" value="입력하기" onclick="num_check(input_num.value);" />
<br /><br />
<div id="num_div" style="width:500px;">

</div>

</div>

<script type="text/javascript">
var interval_on = 0;
var binary = new Array();

function num_check(n) {
//	1. 재귀함수를 이용하세요.
//	2. 내림 함수를 이용하세요. Math.floor(value)
	var result = 0;
	var return_value = "";
	var text_ = document.getElementById('num_div').innerHTML;

	if(text_ != '') {
		binary = [];
		document.getElementById('num_div').innerHTML = '';
	}
	
	if (n<2){
		binary.push(n);
		if(return_value != '') return_value = '';
		for (var i=binary.length-1; i>=0; i--)
		{
			return_value += binary[i];
		}
		document.getElementById("num_div").innerHTML = return_value;
		
	}
	else if (n >= 2){
		result = n%2;
		binary.push(result);
		num_check(Math.floor(n/2));
	}
}

function div(n){
	
	if (n<2){
		//alert(n);
		//console.log("n<2 dl n="+n);
		binary.push(n);
		//return n;	
		//console.log(binary);
		var return_value = "";
		for (var i=0; i<binary.length; i++)
		{
			return_value += binary[i];
			//console.log(return_value);
		}
		return i;	
	}
	else if (n >= 2){
		//console.log(n);
		result = n%2;
		binary.push(result);
		div(Math.floor(n/2));
		//console.log("n="+ n);

		//console.log("result="+ result);
		//console.log("binary="+ binary);

		//return result;
	}
	//binary = n;

	//binary.push(result);
}

</script>