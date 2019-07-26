<script  src="http://code.jquery.com/jquery-latest.min.js"></script>

<?
echo "- 아래 html 소스에 form 과 submit 버튼을 직접 추가하여 exam31_update.php 파일로 넘길 수 있도록 수정해보세요.<br />";
echo "(기본적으로 form 이 table 및 submit 버튼을 모두 감싸고 있어야 제대로 동작합니다.)<br /><br />";

echo "- jquery 를 이용해서 추가 버튼을 눌렀을 때 테이블 마지막에 행을 추가해보세요.<br />";
echo "(추가할 행 : 학년, 학과, 연락처, 이메일 - 각각 input을 이용하여 입력창 형태로 추가)<br />";
echo "(추가된 입력창은 위의 form submit 시 입력 여부를 검사할 수 있어야 함)<br />";
echo "(처음 추가 시에는 학년,학과가 추가되고 두번째 추가시에는 연락처,이메일 이 추가되도록 하세요)<br /><br />";

?>

<form method="post" id="info_form" name="info_form" action="<?=ORANGE_URL?>/system/exam/exam31_update.php" >
<table class="info_tb" border=1 width="1000px">
	<colgroup>
		<col width="15%" />
		<col width="35%" />
		<col width="15%" />
		<col width="35%" />
	</colgroup>
	<tr class="add_tr">
		<th>이름</th>
		<td>홍길동</td>
		<th>학번</th>
		<td>201912345</td>
	</tr>

</table>
<br />

<input type="button" id="add_element" value="추가" />
<input type="submit" value="확 인" class="form_btn" />
</form>

<script type="text/javascript">
var add_cnt = 0;
$(document).ready(function(){
	$("#add_element").on("click", function(){
		if(add_cnt == 0) {
			var add_tr = '<tr class="add_tr">';
			add_tr += '<th>학년</th><td><input type="text" name="grade" id="grade" value="" style="width:20px;" /></td>';
			add_tr += '<th>학과</th><td><input type="text" name="hakgua" id="hakgua" value="" style="width:120px;" /></td></tr>';
			add_cnt++;
		} else if(add_cnt == 1) {
			var add_tr = '<tr class="add_tr">';
			add_tr += '<th>연락처</th><td><input type="text" name="tel" id="tel" value="" style="width:120px;" /></td>';
			add_tr += '<th>이메일</th><td><input type="text" name="email" id="email" value="" style="width:200px;" /></td></tr>';
			add_cnt++;
		} else {
			alert("더 이상 추가할 항목이 없습니다.");
			return false;
		}
		$(".add_tr").last().after(add_tr);
	});
	$("#info_form").on("submit", function(){
		if($("#grade").size()) {
			if($("#grade").val() == "") {
				alert("학년을 입력해주세요.");
				return false;
			}
		}
		if($("#hakgua").size()) {
			if($("#hakgua").val() == "") {
				alert("학과를 입력해주세요.");
				return false;
			}
		}
		if($("#tel").size()) {
			if($("#tel").val() == "") {
				alert("연락처를 입력해주세요.");
				return false;
			}
		}
		if($("#email").size()) {
			if($("#email").val() == "") {
				alert("이메일을 입력해주세요.");
				return false;
			}
		}
		return true;
	});
});

</script>
