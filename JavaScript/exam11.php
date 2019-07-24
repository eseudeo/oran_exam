<?
?>

<pre>11. 아래 휴대폰번호를 스크립트를 이용하여 검증해보세요. (jquery 이용해도 무방)</pre>

<input type="text" id="hp1" name="hp1" style="width:40px;" /> - 
<input type="text" id="hp2" name="hp2" style="width:40px;" /> - 
<input type="text" id="hp3" name="hp3" style="width:40px;" />&nbsp;&nbsp;
<input type="button" value="검증해보기" onclick="hp_check();" />
<br /><br />


<script type="text/javascript">
function hp_check() {
    //	1. 각 자리에 숫자만 있는지, 빈칸이 있는지
    //	2. 각 항목을 전화번호 형태로 결합 후 휴대전화번호 양식에 맞는지(휴대폰번호 검증하는 정규식 이용)
	/*
	var p_num = new Array();
	var i;
	p_num[0] = document.getElementById("hp1").value;
	p_num[1] = document.getElementById("hp2").value;
	p_num[2] = document.getElementById("hp3").value;

	for(i=0;i<3;i++){
		if (!p_num[i].length|| isNaN(p_num[i])) 
			alert("휴대번호를 잘못 입력하셨습니다.");
	}
	*/
/*
	if(!p_num[0].length||!p_num[1].length||!p_num[2].length){
		alert("휴대폰 번호를 입력해주세요");
	}
*/
	
	var num1 = document.getElementById("hp1");
	var num2 = document.getElementById("hp2");
	var num3 = document.getElementById("hp3");

	var RegExp1=/^\d{3}$/g.test(num1.value);
	var RegExp2=/^\d{4}$/g.test(num2.value);
	var RegExp3=/^\d{4}$/g.test(num3.value);

	/*
	var RegExp = /^\d{3}-\d{3,4}-\d{4}$/g;
	var p_num = num1.value+"-"+num2.value+"-"+num3.value;
	var ch_pnum = RegExp.test(p_num);

	*/

	if(!num1.value||isNaN(num1.value)==true||!RegExp1){
			alert("휴대번호를 잘못 입력하셨습니다.");
			num1.value="";
			num1.focus();
			return false;
	}

	if(!num2.value||isNaN(num2.value)==true||!RegExp2){
			alert("휴대번호를 잘못 입력하셨습니다.");
			num2.value="";
			num2.focus();
			return false;
	}

	if(!num3.value||isNaN(num3.value)==true||!RegExp3){
			alert("휴대번호를 잘못 입력하셨습니다.");
			num3.value="";
			num3.focus();
			return false;
	}

	/*
	if (!num1.value||!num2.value||!num3.value)
		{	
			if(isNaN(num1.value)==true||isNaN(num2.value)==true||isNaN(num3.value)==true){
				alert("휴대번호를 잘못 입력하셨습니다.");
			}
			return false;
	}

	if(!ch_pnum){
		alert("휴대번호를 잘못 입력하셨습니다.");
		return false;
	}
	
*/
}
</script>