<?php
	$err = $_GET['err'];

	if     ($err == 400) {header("Location: /index.html");}
	elseif ($err == 403) {header("Location: /index.html");}
	elseif ($err == 404) {header("Location: /index.html");}
	elseif ($err == 500) {header("Location: /index.html");}
	elseif ($err == 501) {header("Location: /index.html");}
	elseif ($err == 502) {header("Location: /index.html");}
	elseif ($err == 503) {header("Location: /index.html");}
	elseif ($err == 504) {header("Location: /index.html");}
	elseif ($err == 505) {header("Location: /index.html");}
?>