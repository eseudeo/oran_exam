<?
echo "아래 exam 이라는 Array 변수 값을 다음에 따라 바꿔보세요. <br />";

$exam = Array('orange', 'apple', 'lemon', 'grape');

echo "1. apple 과 lemon 사이에 'oksusu' 를 추가해보기 (위의 array 자체를 건들지 말고 함수를 이용하여 끼워넣어보세요) <br />";
print_r($exam); echo " <br/>";
array_splice($exam, 2, 0, 'oksusu');
print_r($exam); 
echo " <br/>";
echo "2. 배열에 'grape' 값이 있는지 체크해보기(함수로) <br />";

if (in_array("grape", $exam)) {
    echo "grape<br/>";
}

echo "3. 배열값을 알파벳 순으로 정렬해보기 <br />";
sort($exam);
print_r($exam);

echo " <br/>";

echo "4. 전체 배열의 알파벳 총 갯수 구해보기 <br />";

$exam_st = implode("", $exam);
//echo $exam_st;
echo " <br/>";
echo strlen($exam_st);
echo " <br/>";

echo "5. 전체 알파벳 중 'e' 자 갯수만 구해보기 <br />";
echo substr_count($exam_st, 'e');
?>