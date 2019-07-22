<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<style>
table {
  border-collapse: separate;
  width: 70%;
}
th {
	padding: 8px;
	background-color: #acc2d9;
	color: white;
}
.txt_btn {
  background-color: #acc2d9;
  border: none;
  color: white;
  padding: 15px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
td {
	padding: 8px;
	text-align: left;
	width: 50%;
}
</style>

<pre>
33. 32번에서 저장한 DB 데이터를 이용하여 게시판 리스트를 만들어보세요. 
    테이블을 이용하여 만들고, 제목&내용 검색기능과 페이징 기능도 추가해주세요.
    또한 글쓰기 버튼을 추가하여 눌렀을 때 글을 새로 작성하는 페이지로 이동하게 해주세요.
</pre>
<?
	$connect_db = @mysqli_connect("localhost", "id", "pw") or die('MySQL Connect Error!!!');
	$select_db  = @mysqli_select_db($connect_db, "db_name") or die('MySQL DB Error!!!');

	//페이징
	$count_sql = "SELECT * FROM exam_board";
	$count_sql_result = mysqli_query($connect_db, $count_sql);	

	$total_row = mysqli_num_rows($count_sql_result);
	$list_num = 5;
	$total_page = ceil($total_row / $list_num);

	if($_GET[page] && $_GET[page] > 0){
			$page = $_GET[page];
		}else{
			$page = 1;
		}
	$limit_st = ($page-1)*5;

	
	//검색
	$category = $_GET['select_op'];  //title or author 값이 넘어옴 value 값
	$search_txt = $_GET['search_txt'];  //입력 값
	
	$list_sql = "SELECT * FROM exam_board LIMIT $limit_st, $list_num";


	$search_sql = "SELECT * FROM exam_board WHERE $category LIKE '%$search_txt%' LIMIT $limit_st, $list_num";

	if($search_txt==""){
		$result = mysqli_query($connect_db, $list_sql);
	}
	else if($search_txt != ""){
		$search_count_sql = "SELECT * FROM exam_board WHERE $category LIKE '%$search_txt%'";
		$count_sql_result = mysqli_query($connect_db, $search_count_sql);
		$search_total_row = mysqli_num_rows($count_sql_result);
		$search_total_page = ceil($search_total_row / $list_num);

		$result = mysqli_query($connect_db, $search_sql);
		$total_page = $search_total_page;
		
	}

      //쿼리 조회 결과가 있는지 확인
            if($result) {
                echo "조회 성공";
            } else {
                echo "결과 없음: ".mysqli_error($connect_db);
            }      

?>
<div align="center">
	<table>
		<colgroup width="70%"></colgroup>
		<colgroup width="30%"></colgroup>
	   
		<tr>
			<th>제목</th>
			<th>글쓴이</th>
		</tr>
		<? 
			while($row = mysqli_fetch_row($result)){
		?>
		<tr>
			<td><? echo $row["1"]; ?></td>
			<td><? echo $row["2"]; ?></td>
		</tr>
		<?
		}
		?>
	</table>

	</br>

	<div >

		<?for ($i=1; $i<=$total_page;$i++){?>
		<a href= "<?=$PHP_SELF?>?page=<?=$i?>" class="pg"><?=$i?></a>
		<!--page는 변수 -->
		<?}?>

	</div>

	<br/>
	
		<form method="get" action="exam33.php" id="search_form" class="search_form">
	<div>
			<select id="select_op" name="select_op">
				<option value="title" id="title">제목</option>
				<option value="content" id="content">내용</option>
			</select>
			<input type="text" id="search_txt" name="search_txt" value="">
			<input type="submit" id="search_btn" class ="txt_btn" value="검색">
		</form>

		<input type="button" id="txt_btn" class ="txt_btn" onclick="location='exam32.php'" value="글쓰기"/>
	</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search_form").submit(function(event){
			var $search_s = $("#select_op option:selected").val();
			var $search_in = $("#search_txt").val();
		});
});
</script>