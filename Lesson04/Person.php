<?php
// Person�N���X

class Person {
	// �t�B�[���h
	private $name;		// ����
	private $address;	// �Z��
	private $age;		// �N��
	private $telephone;	// �d�b�ԍ�

	// �f�[�^�o�^�p�̃R���X�g���N�^
	function __construct($name, $address, $age, $telephone) {
		$this -> name = $name;				// ����
		$this -> address = $address;		// �Z��
		$this -> age = $age;				// �N��
		$this -> telephone = $telephone;	// �d�b�ԍ�
	}
	
	// �o�^�����f�[�^���o�͂��郁�\�b�h
	public function print_person() {
		echo "����:".$this -> name."<br>";
		echo "�Z��:".$this -> address."<br>";
		echo "�N��:".$this -> age."<br>";
		echo "�d�b�ԍ�:".$this -> telephone."<br>";
		echo "<br>";
	}
}
?>