<?php
$to = "shakthipav@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: shakthipav@gmail.com" . "\r\n" .
"CC: shakthipav@gmail.com";
$true=mail($to,$subject,$txt,$headers);
if($true){
	echo "uhhhhhhhhhhhhhhhhhhh working";
}
else{
	echo 'not working';
}
?>
