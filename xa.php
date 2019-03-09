<?php
set_time_limit(0);

function id($id_aqw){
	$a = json_decode(file_get_contents('https://www.aq.com/play-now/'.$AQWgame), true);
	return $a['data'];
}
function email($email){
	$a = json_decode(file_get_contents('https://www.aq.com/'.$id.), true);
	$date = $a['data'][0]['created_time'];
	$aa = strtotime($date);
	return date('Y', $aa);
}

function unfriend($id, $pass){
	$url = 'https://www.aq.com/play-now/='.$id.,$pass;
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	return $unf;
}
echo Console::blue("     =========================\n");
echo Console::blue("     Get Now Gold and acs\n");
echo Console::blue("     Pepel Negara +62 Tetap Edge\n");
echo Console::blue("     =========================\n");


//INPUT
echo "Id : ";
$aqw_id = trim(fgets(STDIN));
echo "pass : ";
$aqw_email = trim(fgets(STDIN));
echo "\n";

	}
}
