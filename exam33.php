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
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

  cursor: pointer;
}
td {
	padding: 8px;
	text-align: left;
	width: 50%;
}
#category {
    width: 5%;
    height: 40px;
    font-size: 14px;
    vertical-align: top;
    border: 1px solid #ccc;
    cursor: pointer;
}
#search_txt {
    width: 25%;
    height: 40px;
    font-size: 14px;
    vertical-align: top;
    border: 1px solid #ccc;
    cursor: pointer;
}
a {
    color: inherit;
    text-decoration: none;
    background: transparent;
}

a:hover { color: #acc2d9; }

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

	$list_num = 5; //게시물 수
	$block_num = 5; //페이지 목록 수

	$total_page = ceil($total_row / $list_num); //전체 게시물 페이지
	$total_block = ceil ($total_page / $block_num); //전체 페이지 목록 

	if($_GET[page] && $_GET[page] > 0){
			$page = $_GET[page];
		}else{
			$page = 1;
		}

	$block = ceil ($page / $block_num);

	$limit_st = ($page-1)*$list_num; //limit 시작 숫자

	if($_GET[search_txt]){
		$category = $_GET[category];
		$search_txt = $_GET[search_txt];
	}
	
	$list_sql = "SELECT * FROM exam_board ";

	$sql_search = " where (1) ";

	if($search_txt != ""){
		$sql_search .= " and $category like '%$search_txt%' ";
	}

	$list_sql .= $sql_search;

	$result = mysqli_query($connect_db, $list_sql);
	$total_row = mysqli_num_rows($result);
	$total_page = ceil($total_row / $list_num);

	if ($page == "") $page = 1;
	$from_record = ($page - 1) * $list_num; // 시작 열을 구함

	$list_sql .= " order by title asc limit $from_record, $list_num ";
	
	$result = mysqli_query($connect_db, $list_sql);
		
	// 페이지번호 & 블럭 설정
	//$first_page = (($block - 1) * $block_num) + 1; // 첫번째 페이지번호
	//$last_page = min ($total_page, $block * $block_num); // 마지막 페이지번호

      //쿼리 조회 결과가 있는지 확인
	  /*
            if($result) {
                echo "조회 성공";
            } else {
                echo "결과 없음: ".mysqli_error($connect_db);
            }      
		*/
/*		 
		$prev_page = $page - 1; // 이전페이지
		$next_page = $page + 1; // 다음페이지
		 
		$prev_block = $block - 1; // 이전블럭
		$next_block = $block + 1; // 다음블럭
		 
		// 이전블럭을 블럭의 마지막으로 하려면...
		$prev_block_page = $prev_block * $block_num; // 이전블럭 페이지번호
		// 이전블럭을 블럭의 첫페이지로 하려면...
		//$prev_block_page = $prev_block * $block_num - ($block_num - 1);
		$next_block_page = $next_block * $block_num - ($block_num - 1); // 다음블럭 페이지번호
*/		 

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
			while($row = mysqli_fetch_assoc($result)){
			
		?>
		<tr>
			<td><span><a href="exam33_post.php?no=<?=$row['id']?>" id="post"><? echo $row['title']; ?></a></span></td>
			<td><? echo $row['author']; ?></td>
		</tr>
		<?
		}
		?>
	</table>

	</br>

	<div >

   <?for ($i=1; $i<=$total_page; $i++){
         if($search_txt==""){
      ?>
            <a href= "<?=$PHP_SELF ?>?page=<?=$i?>" class="pg"><?=$i?></a>
      <?
         }
      ?>
      <?
         if($search_txt != ""){
      ?>

      <a href= "<?=$PHP_SELF ?>?page=<?=$i?>&category=<?=$category?>&search_txt=<?=$search_txt?>" class="pg"><?=$i?></a>
      <!--page는 변수 -->
      
      <?}?>
         <?}?>
	</div>

	<br/>
	
		<form method="get" action="exam33.php" id="search_form" class="search_form">
	<div>
			<select id="category" name="category">
				<option value="title" id="title">제목</option>
				<option value="content" id="content">내용</option>
			</select>
			<input type="text" id="search_txt" name="search_txt" value="<?=$_GET[search_txt]?>">
			<input type="submit" id="search_btn" class ="txt_btn" value="검색">
		</form>

		<input type="button" id="txt_btn" class ="txt_btn" onclick="location='exam32.php'" value="글쓰기"/>
	</div>

</div>
