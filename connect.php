<?php

$sqlConnect = mysqli_connect(
	$config['DB']['SERVER'], 
	$config['DB']['USER'], 
	$config['DB']['PASSWORD'], 
	$config['DB']['NAME']
);
