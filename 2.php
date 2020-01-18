<?php 
$username = "sss99sas_";
echo  username($username);
echo "<br/>";
function username($username){
	$cekhurufkecil = preg_match('@[a-z\_]@', $username);
	$cekhurufbesar = preg_match('@[A-Z]@', $username);
	$cekspesialkarakter = preg_match('[\W]', $username);
	if ($cekhurufkecil == 0) {
		echo  "username harus mengandung huruf kecil";
	}elseif ($cekhurufbesar == 1) {
		echo "username harus mengandung huruf kecil";
	}elseif ($cekspesialkarakter == 1) {
		echo "username tidak boleh mengandung spesial karakter kecuali underscorse";
	}elseif (strlen($username) < 5) {
		echo "username anda tidak boleh kurang dari 5 karakter";
	}elseif (strlen($username) > 12) {
		echo "maksimal 12 karakter";
	}
	else {
		echo "username anda adalah $username";
	}
}

$password = "1CFGHI@";
echo password($password);

function password($password){
	$cekangka = preg_match('@[0-9]@', $password);
	$cekhurufbesar = preg_match('@[A-Z]@', $password);
	$ceksimbol = preg_match('[\W]', $password);
	$result = preg_replace("/[^A-Z]/", "", $password);
	if ($ceksimbol == 0) {
		echo "masukan 1 simbol";
	} else if ($cekangka == 0) {
		echo "masukan 1 angka";
	}else if (strlen($result) < 5) {
		echo "harus 5 huruf besar";
	}else if (strlen($result) > 5) {
		echo "harus 5 huruf besar";
	}
	else {
		echo "password anda adalah $password";
		echo "<br/>";
	}

}

 ?>