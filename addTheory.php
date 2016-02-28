<?php
$dbc=mysqli_connect('localhost:3306',"root","","chessdb");
$level = filter_input(INPUT_GET,'level');
$chapter = filter_input(INPUT_GET,'chapter');
$subChapter = filter_input(INPUT_GET,'subChapter');
$image = filter_input(INPUT_GET,'image');
$doc = filter_input(INPUT_GET,'doc');
$textTheory = filter_input(INPUT_GET,'textTheory');
/*echo $move;*/

$query = "select * from theory where (Level='$level' and Chapter='$chapter' and SubChapter='$subChapter')";
$r = mysqli_query($dbc,$query);
if(mysql_num_rows($r)>0){
	$query = "update theory set  (Image='$image' ,Doc='$doc' , TextTheory='$textTheory') where (Level='$level' and Chapter='$chapter' and SubChapter='$subChapter') ";
	$r = mysqli_query($dbc,$query);
}
else{
	$query = "insert into  theory values('$level','$chapter','$subChapter' ,'$image','$doc','$textTheory')";
	$r = mysqli_query($dbc,$query);
}

echo "";
?>