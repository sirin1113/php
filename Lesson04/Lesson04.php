<?php
////////////////////////////////////////////////////////////////////////////////
// Lesson04
// �l�N���X(Person)���쐬���APerson�ɓo�^��������Person�N���X��print���\�b�h�ŏo�͂���v���O����
////////////////////////////////////////////////////////////////////////////////

// �����R�[�h�Œ�
header('Content-Type: text/html; charset=SJIS');
// �t�@�C���̃C���|�[�g
require("Person.php");

// �����t�R���X�g���N�^�Ńf�[�^�o�^
$p1 = new Person("�������Y", "�����s", 20, "030123456");
$p2 = new Person("�R�c�Ԏq", "�X��", 80, "0170123456");
$p3 = new Person("�ؑ����Y", "���s�{", 38, "0750123456");
		
// �o�^�����f�[�^��Person�N���X�ɂ���print_person���\�b�h�ŉ�ʏo��
$p1 -> print_person();
$p2 -> print_person();
$p3 -> print_person();
?>