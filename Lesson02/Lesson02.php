<?php
////////////////////////////////////////////////////////////////////////////////
// Lesson02
// 配列dataを逐次決定法で昇順にソートして結果を出力するプログラム
////////////////////////////////////////////////////////////////////////////////

// 文字コード固定
header('Content-Type: text/html; charset=SJIS');

// ★ ここから----------

// ソート対象となるデータ
$data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// 配列データをランダムに並び替える
for($loop = 0; $loop < count($data); $loop++) {
	// 変数leftとrightには、配列dataのいずれかの要素番号がランダムに代入される
	$left = rand(0, count($data)-1);
	$right = rand(0, count($data)-1);

	$swap = $data[$left];
	$data[$left] = $data[$right];
	$data[$right] = $swap;
}

// ★ ----------ここまでの部分は変更しないでください。

// ソート前のデータを出力
echo "ソート前<br>";
echo $data[0];
for($i = 1; $i < count($data); $i++) {
	echo ",".$data[$i];
}
echo "<br><br>";

// 逐次決定法でソート
echo "ソート途中<br>";
for($i = 0; $i < count($data) - 1; $i++) {
	for($j = 1 + $i; $j < count($data); $j++) {
		if($data[$i] > $data[$j]){
			$swap = $data[$i];
			$data[$i] = $data[$j];
			$data[$j] = $swap;
			
			$flag = 1;
		}
	}
	
	// ソート途中のデータを出力
	echo $data[0];
	for($j = 1; $j < count($data); $j++) {
		echo ",".$data[$j];
	}
	echo "<br>";
}
echo "<br>";

// ソート後のデータを出力
echo "ソート後<br>";
echo $data[0];
for($i = 1; $i < count($data); $i++) {
	echo ",".$data[$i];
}
?>