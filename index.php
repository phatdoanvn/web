<?php 
//khai báo biến
$a="chào mừng buổi học php cơ bản";
echo "Xin chào"; // in bien ra ngoai
print $a."<br/>";
//khai báo hằng
define ('MSV',15);
echo MSV;


$chuoi="95";
$tuoi=(int)$chuoi;//chuyen tu chuoi sang so
is_int($chuoi);//ktra chuoi co phai kieu int khong

#kieu boolean  ( logi ) true||false
#kieu so phwusc ( FLOAR ), (DOUBLE)
$test=(string) "abc";
$mang=array();
$mang_phan_tu=array('1','2','3');//rule code , ko chi muc
var_dump($mang_phan_tu);

$sinhvien=array(
    0 => 'Nguyen van A',
    1 => 'Le Van B'

);
var_dump($sinhvien)."<br/>";
#mang ket hop
$sinh_vien=[
    'sinhvien1' =>"Tuan",
    'sinhvien2' =>"An"
];
var_dump($sinh_vien);
$SinhVien=[
    1 =>[
        'ten' =>"Tuan",
        'tuoi' =>27,
        'dia_chi' =>
        [
            'nha_rieng' =>"Ha Noi",
            'co_quan' =>"o nha",
        ]
    ]
];
var_dump($SinhVien);