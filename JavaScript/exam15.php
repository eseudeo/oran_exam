<?
?>
<div style="margin-left:10px;">

<pre>15. 입력값을 받아서 아래 문장과 비교하여 겹치는 값이 있을 때 몇번 겹치는지 alert으로 나타내주고 겹치는 부분을 모두 삭제해보세요.
</pre>

<br /><br />
입력 : <input type="text" name="input_word" id="input_word" style="width:100px;" /><br />
<input type="button" value="입력하기" onclick="word_check();" />
<br /><br />
<div id="word_div" style="width:500px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

</div>

<script type="text/javascript">
var interval_on = 0;
/*
function word_check() {
	var mun = document.getElementById('input_word').value;
	var word = document.getElementById('word_div').innerHTML;

	var count = 0;
	var pos = word.indexOf(mun); 
	var change_word = word.replace(mun, '');


	var regex = new RegExp(mun, "g");
	var change_word = word.replace(regex, '');

	while (pos !== -1) {
		count++;
		pos = word.indexOf(mun, pos + 1);
	}

	alert(count); 
	document.getElementById('word_div').innerHTML = change_word;
}
*/


function word_check() {
//	1. 글자를 비교하는 함수를 이용하세요.
	var mun = document.getElementById('input_word').value;
	var word = document.getElementById('word_div').innerHTML;
	var i;
	
	var regex = new RegExp(mun, "g");
	var change_word = word.replace(regex, '');
	
	var stMatch = word.match(regex); 
	
	var match_count = 0; 

	if (!stMatch)
	{
		alert("0");
		return false;
	}	

	else{
		match_count = word.match(regex).length; 
		alert(match_count);
	}

	if(!match_count){
		for (i=0;i<match_count;i++ )
		{
			word.replace(mun, '');
		}
	}

	document.getElementById('word_div').innerHTML = change_word;
}

</script>