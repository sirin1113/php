<?php
////////////////////////////////////////////////////////////////////////////////
// Lesson03
// �z��data��אڌ����@�ŏ����Ƀ\�[�g���Č��ʂ��o�͂���v���O����
////////////////////////////////////////////////////////////////////////////////

// �����R�[�h�Œ�
header('Content-Type: text/html; charset=SJIS');

// �� ��������----------

// �\�[�g�ΏۂƂȂ�f�[�^
$data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// �z��f�[�^�������_���ɕ��ёւ���
for($loop = 0; $loop < count($data); $loop++) {
	// �ϐ�left��right�ɂ́A�z��data�̂����ꂩ�̗v�f�ԍ��������_���ɑ�������
	$left = rand(0, count($data)-1);
	$right = rand(0, count($data)-1);

	$swap = $data[$left];
	$data[$left] = $data[$right];
	$data[$right] = $swap;
}

// �� ----------�����܂ł̕����͕ύX���Ȃ��ł��������B

// �\�[�g�O�̃f�[�^���o��
echo "�\�[�g�O<br>";
echo $data[0];
for($i = 1; $i < count($data); $i++) {
	echo ",".$data[$i];
}
echo "<br><br>";

// �אڌ����@�Ń\�[�g
echo "�\�[�g�r��<br>";
for($i = 0; $i < count($data) - 1; $i++) {

	// �\�[�g�I���t���O
	$break_flag = true;
	
	for($j = 0; $j < count($data) - 1 - $i; $j++) {
		if($data[$j] > $data[$j + 1]){
			$swap = $data[$j];
			$data[$j] = $data[$j + 1];
			$data[$j + 1] = $swap;
			
			$break_flag = false;
		}
	}
	
	// ����ւ����Ȃ���΃\�[�g�I��
	if($break_flag){
		break;
	}
	// �\�[�g�r���̃f�[�^���o��
	echo $data[0];
	for($j = 1; $j < count($data); $j++) {
		echo ",".$data[$j];
	}
	echo "<br>";
}
echo "<br>";

// �\�[�g��̃f�[�^���o��
echo "�\�[�g��<br>";
echo $data[0];
for($i = 1; $i < count($data); $i++) {
	echo ",".$data[$i];
}
?>