<?
?>
<div style="margin-left:10px;">

<pre>17. 입력창에 값을 넣는 동시에 체크하여 숫자가 아니면 입력되지 않도록 해보세요.
</pre>

<br /><br />

입력 : <input type="text" name="input_num" id="input_num" style="width:100px;" onkeyup="num_check(this.value=this.value.replace(/ ^0-9 /g ''));" /><br />
<br /><br />

</div>

<script type="text/javascript">
var interval_on = 0;

function num_check(val) {
//	1. 이벤트 함수를 이용하세요.
//	2. 숫자가 아닌 값을 넣으면 아예 입력자체가 안되게 해보세요.
	/*
	var x = document.getElementById("input_num");
	if(isNaN(x.value)==true){
			
	x.value = event.preventDefault();
	x.value = '';
	}
	*/
	/*
	var txt = event.keyCode;
	if(txt<58||txt>48){
		val = event.preventDefault();
	}
		*/
	var txt = document.getElementById("input_num").value;
	var inp = val;
	var del = '';

	var keyValue = event.keyCode;
	
	if( ((keyValue >= 48) && (keyValue <= 57))){
            return true;
        }
    else{
	//		txt.replace(inp,del);
            return false;
    }

	
}	
</script> 