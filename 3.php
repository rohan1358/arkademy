<?php  
$kalimat = '2 pasang sandal hilang';
echo kalimat($kalimat);
echo "<br/>";
function kalimat($kalimat){
	$jmlhkta = str_word_count($kalimat,0, '0...9');
	$allstr = str_word_count($kalimat);
	$tipe = gettype($kalimat);
	if ($tipe != 'string') {
		echo "Parameter harus string!";
	}else{
		echo $allstr.'/'.$jmlhkta;
	}
}

?>