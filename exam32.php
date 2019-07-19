<script  src="http://code.jquery.com/jquery-latest.min.js"></script>

<style>
table {
  border-collapse: separate;
  width: 100%;
}

th {
	padding: 8px;
	background-color: #acc2d9;
	color: white;
}

.text_win {
	padding: 8px;
	text-align: left;
	border: 1px solid #ddd;
	width: 50%;
}

.button {
  background-color: #acc2d9;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

32. 직접 table 과 form 을 이용하여 게시판 입력 형태로 html 을 구성하고 실제로 값들을 입력받아서 exam32_update.php 파일로 값을 넘겨서 DB에 저장해보세요. 
	DB명세표는 exam32_update.php 파일을 참조하세요. 간단하게 제목, 글쓴이, 패스워드, 내용 까지만 입력받으면 됩니다. ( 반드시 입력값을 스크립트를 이용하여 검증해야 합니다.)

<h1 style="color:#1a4157;">게시판 글쓰기</h1>
<hr />

<form method="post" id="frm" name="frm" action="exam32_update.php" >

<table class="borad" >
<tr>
	<th>제목</th>
	<td><input type="text" id="title" name="title" class="text_win" value=""></td>
</tr>
<tr>
	<th>글쓴이</th>
	<td><input type="text"  id="author" name="author" class="text_win" value=""></td>
</tr>

<tr>
	<th>내용</th>
	<td><textarea cols="100%" rows="50%"  id="content" name="content" class="text_win" value=""></textarea></td>
</tr>
<tr>
	<th>패스워드</th>
	<td><input type="password"  id="password" name="password" class="text_win" value=""></td>
</tr>
</table>
</br>

<div align="center">
	<input type="submit" value="확 인" id="frm_btn" class="frm_btn button"/>

	</form>

	<input type="button" value="목 록" onclick="location='exam33.php'" class="frm_btn button"/>
</div>

<script type="text/javascript">
	

$(document).ready(function(){
	

	$("#frm").submit(function(event){
	
		var title = $("#title").val();

		var author = $("#author").val();

		var password = $("#password").val();

		var content = $("#content").val();
		
		if(title == ""){
			alert("제목을 입력해주세요");
			return false;
		}
		if(author == "") {
			alert("글쓴이를 입력해주세요.");
			return false;
		}
		if(password == "") {
			alert("패스워드를 입력해주세요.");
			return false;
		}
		if(content == "") {
			alert("내용을 입력해주세요.");
			return false;
		}
	});

});
		
</script>