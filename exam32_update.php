<?

$connect_db = @mysqli_connect("localhost", "id", "pw") or die('MySQL Connect Error!!!');
$select_db  = @mysqli_select_db($connect_db, "0") or die('MySQL DB Error!!!');

/*
DB 명세표
CREATE TABLE `exam_board` (
  `id` int(11) NOT NULL COMMENT '오토아이디',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '제목',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '패스워드',
  `author` varchar(255) NOT NULL DEFAULT '' COMMENT '글쓴이',
  `content` text NOT NULL COMMENT '내용',
  `regdate` datetime NOT NULL DEFAULT '1971-01-01 00:00:00' COMMENT '작성일시',
  `editdate` datetime NOT NULL DEFAULT '1971-01-01 00:00:00' COMMENT '수정일시'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='게시판예제';
*/

	$title = $_POST['title']; 
	$password = $_POST['password']; 
	$author = $_POST['author']; 
	$content = $_POST['content']; 

    echo $title. "<br>"; 
	echo $password. "<br>"; 
	echo $author. "<br>"; 
	echo $content. "<br>"; 
	

	$insert_query = "INSERT INTO exam_board SET title='$title', password='$password', author='$author', content='$content', regdate = '".date('Y-m-d H:i:s')."' ";
	echo $insert_query;
	mysqli_query($connect_db, $insert_query);


//	입력이 완료되면 exam32.php 파일로 다시 돌아가도록 해주세요.(스크립트를 이용해도 됩니다)
	echo ("<meta http-equiv='Refresh' content='1; URL=exam32.php'>");
?>
