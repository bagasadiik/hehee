<?php 
$account = "081380207723"; // nomor ovo
$access = "4ea4e8bc7066434794361ae3afacc3231c584642"; // access ovo

$max=100; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/play_game.php?phone_number=$account&access_code=$access"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>