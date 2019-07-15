<? ?>
<pre>1. 아래에서 문 열기 버튼을 눌렀을 때 '창문' 이라는 글자가 '창문 열림'으로 바뀌고, 문 닫기 버튼을 눌렀을 때 '창문 닫힘' 으로 바뀌도록 스크립트를 작성해보세요.</pre>

<input type="button" value="문 열기" id="open" onclick="door_open();" style="border:1px solid #000;">
</input>&nbsp;&nbsp;

<input type="button" value="문 닫기" id="close" onclick="door_close();" style="border:1px solid #000;">
</input>
<br /><br />

<div id="door">
  창문
</div>


<script type="text/javascript">
function door_open() {
	document.getElementById("door").innerHTML = '창문 열림';
}

function door_close() {
	document.getElementById("door").innerHTML = '창문 닫힘';
}

</script>