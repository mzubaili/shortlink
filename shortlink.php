<?php
echo "
       ______              _______________       ______
__________  /________________  /___  /__(_)_________  /__
__  ___/_  __ \  __ \_  ___/  __/_  /__  /__  __ \_  //_/
_(__  )_  / / / /_/ /  /   / /_ _  / _  / _  / / /  ,<
/____/ /_/ /_/\____//_/    \__/ /_/  /_/  /_/ /_//_/|_|
		Coded by: Zhu Bai Lee
		    copyrigth©2020
		   Black Coder Crush

";
echo "URL: ";
$link = trim(fgets(STDIN));
$ce = file_get_contents("http://ostc.herokuapp.com/api/v1/ushort?url=".$link);
$jd = json_decode($ce,true);
echo "link asli      : ".$jd['result'][0]['original']."\n";
echo "hasil shortlink: ".$jd['result'][0]['short']."\n";
?>