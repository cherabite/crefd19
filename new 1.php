﻿

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Test</title>
<style type="text/css">
    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
</style>
</head>
<body>
<?php
$nb_sal=30;
     if(($nb_sal%8==0)){
			   $ammana=(int)($nb_sal /8);
			   $travails=(int)($nb_sal /8);
		   }else{
			   $ammana=(int)($nb_sal /8)+1;
			   $travails=(int)($nb_sal /8)+1;
		   }
		   if(($nb_sal%10==0)){
			   $commun=(int)($nb_sal /10);
			   
		   }else{
			   $commun=(int)($nb_sal /10)+1;
			 		   }
					   echo $ammana;echo '<br><br/>';
					   echo $travails;echo '<br><br/>';
					   echo $commun;
					   ?>
					   
</body>
</html>

