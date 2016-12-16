<?php
// Personクラス

class Person {
	// フィールド
	private $name;		// 氏名
	private $address;	// 住所
	private $age;		// 年齢
	private $telephone;	// 電話番号

	// データ登録用のコンストラクタ
	function __construct($name, $address, $age, $telephone) {
		$this -> name = $name;				// 氏名
		$this -> address = $address;		// 住所
		$this -> age = $age;				// 年齢
		$this -> telephone = $telephone;	// 電話番号
	}
	
	// 登録したデータを出力するメソッド
	public function print_person() {
		echo "氏名:".$this -> name."<br>";
		echo "住所:".$this -> address."<br>";
		echo "年齢:".$this -> age."<br>";
		echo "電話番号:".$this -> telephone."<br>";
		echo "<br>";
	}
}
?>