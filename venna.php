<?php
$Russian_alph = ['А'=> '1','Б'=> '2','В'=>'3','Г'=> '4','Д'=> '5','Е'=>'6','Ё'=>'7','Ж'=>'8','З'=>'9','И'=>'10','Й'=>'11', 'К'=>'12','Л'=>'13' ,'М'=>'14','Н'=>'15', 'О'=>'16','П'=>'17','Р'=>'18', 'С'=>'19','Т'=>'20','У'=>'21','Ф'=>'22','Х'=>'23','Ц'=>'24','Ч'=>'25', 'Ш'=>'26','Щ'=>'27', 'Ъ'=>'28','Ы'=>'29',  'Ь'=>'30', 'Э'=>'31','Ю'=>'32','Я'=>'33'];
$Greek_alph =  ['А'=>'1','В'=>'3', 'Г'=>'4','Δ'=>'46','Е'=>'6',  'Z'=>'45',  'Н'=>'15', 'Θ'=>'47', 'I'=>'37', 'K'=>'53', 'Λ'=>'48', 'М'=> '14', 'N'=>'39',  'Ξ'=>'49', 'О'=>'16','П'=>'17', 'Р'=>'18','Σ'=>'50','Т'=>'20',  'Υ'=>'444','Ф'=>'22', 'Х'=>'23',  'Ψ'=>'51', 'Ω'=>'52'];
$Latin_alph = [  'A'=>'1',  'B'=>'3',  'C'=>'19',  'D'=>'34',  'E'=>'6',  'F'=>'35', 'G'=>'36',  'H'=>'15',  'I'=>'37',  'K'=>'53',  'L'=>'38',  'M'=>'14',  'N'=>'39',  'O'=>'16',  'P'=>'18', 'Q'=>'40',  'R'=>'41',  'S'=>'42',  'T'=>'20',  'V'=>'43','W'=>'4343',  'X'=>'23',  'Y'=>'445',  'Z'=>'45'];

/* Главное пересечение трех алфавитов */
$main = array_intersect($Russian_alph, $Greek_alph, $Latin_alph);
$main = array_flip($main);
echo "Вывод общих букв для всех трех алфавитов\n";
print_r($main);


/* Совпадение букв в Русском и Греческом алфавите (с центром) */
$diff_Ru_Gr = array_intersect($Russian_alph, $Greek_alph);
$main_Ru_Gr = array_flip($main);
$uniq_Ru_Gr = array_merge($diff_Ru_Gr, $main_Ru_Gr);
$uniq_Ru_Gr = array_flip($uniq_Ru_Gr);
echo "Совпадение букв в Русском и Греческом алфавите (с центром)\n";
print_r($uniq_Ru_Gr);


/* Совпадение букв в Русском и Латинском алфавите (с центром) */
$diff_Ru_Lat = array_intersect($Russian_alph, $Latin_alph);
$main_Ru_Lat = array_flip($main);
$uniq_Ru_Lat = array_merge($diff_Ru_Lat, $main_Ru_Lat);
$uniq_Ru_Lat = array_flip($uniq_Ru_Lat);
echo "Совпадение букв в Русском и Латинском алфавите (с центром)\n";
print_r($uniq_Ru_Lat);


/* Совпадение букв в Греческом и Латинском алфавите (с центром) */
$diff_Gr_Lat = array_intersect($Greek_alph, $Latin_alph);
$main_Gr_Lat = array_flip($main);
$uniq_Gr_Lat = array_merge($diff_Gr_Lat, $main_Gr_Lat);
$uniq_Gr_Lat = array_flip($uniq_Gr_Lat);
echo "Совпадение букв в Греческом и Латинском алфавите (с центром)\n";
print_r($uniq_Gr_Lat);


/* Уникальность букв в Русском алфавите */
$diff_Ru = array_diff($Russian_alph, $Greek_alph, $Latin_alph);
$diff_Ru = array_flip($diff_Ru);
echo "Вывод букв, которые встречаются только в русском алфавите\n";
print_r($diff_Ru);


/* Уникальность букв в Латинском алфавите */
$diff_Lat = array_diff($Latin_alph, $Russian_alph, $Greek_alph);
$diff_Lat = array_flip($diff_Lat);
echo "Вывод букв, которые встречаются только в латинском алфавите\n";
print_r($diff_Lat);


/* Уникальность букв в Греческом алфавите */
$diff_Gr = array_diff($Greek_alph, $Russian_alph, $Latin_alph);
$diff_Gr = array_flip($diff_Gr);
echo "Вывод букв, которые встречаются только в греческом алфавите\n";
print_r($diff_Gr);


/* ~~~~~~~~~~~~~~~~~ ДОПОЛНИТЕЛЬНО ~~~~~~~~~~~~~~~~~~~~ */
// echo "ДОПОЛНИТЕЛЬНО, ВЫВОД ВСЕХ ОБЛАСТЕЙ ДИАГРАММЫ\n";

/* Объединенный (3в1) алфавит без повторов */
// $uniq = array_merge($Russian_alph, $Greek_alph, $Latin_alph);
// $uniq = array_unique($uniq);
// $uniq = array_flip($uniq);
// echo "Объединенный (3в1) алфавит без повторов\n";
// print_r($uniq);

/* Совпадение букв в Русском и Греческом алфавите (без центра) */
// $diff_Ru_Gr = array_intersect($Russian_alph, $Greek_alph);
// $main_Ru_Gr = array_flip($main);
// $uniq_Ru_Gr = array_diff($diff_Ru_Gr, $main_Ru_Gr);
// $uniq_Ru_Gr = array_flip($uniq_Ru_Gr);
// echo "Совпадение букв в Русском и Греческом алфавите (без центра)\n";
// print_r($uniq_Ru_Gr);


/* Совпадение букв в Русском и Латинском алфавите (без центра) */
// $diff_Ru_Lat = array_intersect($Russian_alph, $Latin_alph);
// $main_Ru_Lat = array_flip($main);
// $uniq_Ru_Lat = array_diff($diff_Ru_Lat, $main_Ru_Lat);
// $uniq_Ru_Lat = array_flip($uniq_Ru_Lat);
// echo "Совпадение букв в Русском и Латинском алфавите (без центра)\n";
// print_r($uniq_Ru_Lat);


/* Совпадение букв в Греческом и Латинском алфавите (без центра) */
// $diff_Gr_Lat = array_intersect($Greek_alph, $Latin_alph);
// $main_Gr_Lat = array_flip($main);
// $uniq_Gr_Lat = array_diff($diff_Gr_Lat, $main_Gr_Lat);
// $uniq_Gr_Lat = array_flip($uniq_Gr_Lat);
// echo "Совпадение букв в Греческом и Латинском алфавите (без центра)\n";
// print_r($uniq_Gr_Lat);

