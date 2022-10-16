<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>script_recours.php</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
</head>
<body>
<fieldset>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
  <input type="file" name="file"/>
  <input type="submit" name="Submit" value="Submit"/>
 </form>
 </fieldset>
<?php 
set_time_limit (200);
 
 $host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imthne';



$link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
mysql_select_db($db) or die ('Erreur :'.mysql_error());
mysql_query("SET NAMES cp1256");
mysql_query("set characer set cp1256"); 
if(isset($_POST["Submit"])){
 
 
// $i=$_POST["saisie"] ;   $_FILES['csv_file']['tmp_name'];
$file=$_FILES['file']['tmp_name'] ;
if($file){
if (($handle = fopen($file, "r")) !== FALSE)
 {
   $data = fgetcsv($handle, 1000, ";");
   while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
	 //  $code104 = ;
   /* $nbr_condidats = $data[0];
     $code357 = 41;
	  $code355 = $data[2];
	   $code353 = $data[3];
	    $code351 = $data[4];
		 $code337 = $data[5];
		  $code318 = $data[6];
		   $code316 = $data[7];
		   $code315 = $data[8];
		    $code314 = $data[9];
			 $code313 = $data[10];
			  $code312 = $data[11];
			  $code257 = $data[12];
	           $code255 = $data[13];
	            $code253 = $data[14];
	             $code251 = $data[15];
			   $code237 = $data[16];
			    $code218 = $data[17];
				 $code216 = $data[18];
				 $code215 = $data[19];
				  $code214 = $data[20];
				   $code213 = $data[21];
				    $code212 = $data[22];
					 $code124 = $data[23];
					  $code122 = $data[24];
					   $code404 = $data[25];
					    $code304 = $data[26];
						 $code204 = $data[27];
						  $code104 = $data[28];*/
						   $etab=$data[29];
						   $pole=$data[30];
						    $wil=$data[31];
						  $directeur=$data[32];
						  $code_etab=$data[33];
						  $nbr_classes=$data[34];
	
// $db=mysql_select_db("scolarite60"); 
if ($db==FALSE)  
echo("erreur de connexion a la base de donnees  NOTES104") ,'<br/>';	
   /*  $requete = "UPDATE detnotes1817 SET DNNEXAM='$float',REMAR_EXA='2', ID_USER_NEXAM ='99'
 WHERE DNANNEXE='$annexe' and DNNSEQ= '$nseq'  and DNANNEEINS='$anneeins'  and DNCODE= '$code'   "; */
 $requete=" INSERT INTO `imthne`.`tab_stat` (`nbr_condidats`, `c357`, `c355`, `c353`, `c351`, `c337`, `c318`, `c316`,`c315`, `c314`, `c313`, `c312`, `c257`, `c255`,  `c253`, `c251`,  `c237`, `c218`, `c216`,`c215`,`c214`, `c213`, `c212`, `c124`, `c122`, `c404`, `c304`, `c204`, `c104`, `etablissent`, `pole`, `wil`, `directeur`, `code_etab`, `nbr_classes`)
 VALUES ('$data[0]','$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', '$data[11]', '$data[12]', '$data[13]', '$data[14]', '$data[15]', '$data[16]', '$data[17]', '$data[18]', '$data[19]', '$data[20]', '$data[21]', '$data[22]', '$data[23]', '$data[24]', '$data[25]', '$data[26]', '$data[27]', '$data[28]'
 , '$data[29]', '$data[30]', '$data[31]','$data[32]','$data[33]','$data[34]') ;";
 $res2= mysql_query($requete);
// echo $requete,'<br/>';
if ($res2==FALSE)
{
echo("Error description: " . mysql_error($link));
}else{ 
?> <SCRIPT LANGUAGE="Javascript">	alert("l'insertion fait avec seccés");
            window.location.href = 'index.php';
           // exit();
        </SCRIPT> <?php
 }
}
 }
fclose($handle);
}
}
mysql_close();
?>
</body>
</html>
