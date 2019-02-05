<?php 
$account = "081380207723"; // nomor ovo
$access = "4ea4e8bc7066434794361ae3afacc3231c584642"; // access ovo
$amount = 1; // jumlah tf (bisa rp1)
$transfer_to = "081311776262"; // nomor ovo tumbal

$max=100; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/transfer.php?phone_number=$account&amount=$amount&access_code=$access&to_account=$transfer_to"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>