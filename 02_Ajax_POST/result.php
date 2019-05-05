<?php 
	
$number = isset($_POST['aaa']) ? (int)$_POST['aaa'] : false;
if (!$number){
    die ('<h1>Vui lòng nhập một số lớn hơn không (0)</h1>');
}

for ($i = 1; $i <= $number; $i++){
    echo '<li>Số: '.$i.'</li>';
    echo $_POST['bbb'];
}
 ?>