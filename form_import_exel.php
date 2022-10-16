<html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>recherche par matr</title></head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset>
        <p>
            <label>اختر:</label>
            
        <p>
        <p>
            <input type="submit" name="rempl_tab_niv" value="rempl_tab_niv" />
           	<input type="submit" name="sup_tab_niv" value="sup_tab_niv" />
			<input type="submit" name="sup_tab_total" value="sup_tab_total" />
			<input type="submit" name="rempl_tab_total" value="rempl_tab_total" />
        </p>
    </fieldset>
</form>
<?php
if (isset($_POST['rempl_tab_niv']))
{
// information pour la connection à le DB
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imthne';

 
    // j'ai cliqué sur « remplir tab_niv »
 

// connection à la DB

$link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
mysql_select_db($db) or die ('Erreur :'.mysql_error());
mysql_query("set character_set_server='utf8'");
mysql_query("set names 'utf8'");
$select = "SELECT * FROM tab_stat ";
//$select = "SELECT * FROM ELEVE19 WHERE NPR='$nbr'" ;
$result = mysql_query($select);
$total = mysql_num_rows($result);
$nbrchamps=mysql_num_fields($result);

while($row = mysql_fetch_row($result))

{
	$nbr_niv=0;
	for ($i=1;$i<28;$i++)
	{
		//$v=$row[$i];
		if($row[$i]>0)
		{
			$nbr_niv=$nbr_niv+1;
		$field=mysql_field_name($result, $i);	
			 //création de la requête SQL:
			 mysql_query("set character_set_server='utf8'");
             mysql_query("set names 'utf8'");
             $sql = "INSERT  INTO tab_niv (cod_etab ,etab ,niv,nbr_cond_par_niv,obs1,obs2 )
            VALUES ( '$row[32]','$row[28]','$field','$row[$i]','','') " ;
 
           //exécution de la requête SQL:
             $requete = mysql_query($sql)  ;
                    
               //affichage des résultats, pour savoir si l'insertion a marchée:
             if($requete)
             {
              echo("L'insertion a été correctement effectuée tab_niv") ;
			  echo '<br>';
              }
              else
              {
              echo("L'insertion à échouée") ;
              }
			
		}
	}
	// inserer nbr_niv dans tab_total
	 $sqll = "INSERT  INTO tab_total (nbr_classes,nbr_niv,nbr_cond_par_centre,etab,cod_etab,directeur,pole,wil)
            VALUES ( '$row[33]','$nbr_niv','$row[0]','$row[28]','$row[32]','$row[31]','$row[29]','$row[30]') " ;
 
           //exécution de la requête SQL:
             $requet = mysql_query($sqll)  ;
              if($requet)
             {
              echo("L'insertion a été correctement effectuée dans tab_stat") ;
			  echo '<br>';
              }
              else
              {
              echo("L'insertion à échouée") ;
              }
			       
}
//mysql_close($link);
} //end bouton remplir tab_niv
elseif (isset($_POST['sup_tab_niv']))//bouton supprission tab_niv
 {
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'imthne';
   $link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
    mysql_select_db($db) or die ('Erreur :'.mysql_error());
    mysql_query("set character_set_server='utf8'");
    mysql_query("set names 'utf8'");
 
	 $sqlll = mysql_query("DELETE FROM tab_niv");
	 
	 if (!$sqlll)
       {
          die ( 'Erreur de requête : ' . mysql_error() );
       }
          //Si tout va bien
        else
        {
         echo 'Les données ont été effacées.';
        }
mysql_close($link);
 }
 elseif (isset($_POST['sup_tab_total']))//bouton supprission tab_total
 {
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'imthne';
   $link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
    mysql_select_db($db) or die ('Erreur :'.mysql_error());
    mysql_query("set character_set_server='utf8'");
    mysql_query("set names 'utf8'");
 
	  $sqllll = mysql_query("DELETE FROM tab_total");
	  $sqllll2 = mysql_query("DELETE FROM tab_stat");
	 
	 if (!$sqllll)
       {
          die ( 'Erreur de requête : ' . mysql_error() );
       }
          //Si tout va bien
        else
        {
         echo 'Les données ont été effacées tab_total.';
        }
mysql_close($link);
 }
 elseif (isset($_POST['rempl_tab_total']))
 {
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'imthne';
   $link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
    mysql_select_db($db) or die ('Erreur :'.mysql_error());
    mysql_query("set character_set_server='utf8'");
    mysql_query("set names 'utf8'");
$select = "SELECT * FROM tab_total ";
$result = mysql_query($select);
$nbr_row = mysql_num_rows($result);
$nbrchamps=mysql_num_fields($result);

for($i=1;$i<$nbr_row+1;$i++)

{
	 
	$row = mysql_fetch_row($result);
	$pv_salle=$row[20]*4; 
	$nbr_salle=$row[20];
	//echo $nbr_salle;
	if ($nbr_salle % 8==0){$ammana=$nbr_salle / 8;}else{$ammana=((int)($nbr_salle/8))+1;}
   if ($nbr_salle % 10==0){$itissal=$nbr_salle / 10;}else{$itissal=((int)($nbr_salle/10))+1;}
   if ($nbr_salle % 8==0){$op=$nbr_salle / 8;}else{$op=((int)($nbr_salle/8))+1;}

 $conv_gardien=$row[20]*3;
 //$conv_com_secrit//
 //$stylo=$row[20]//
 $envloppe=$row[20]*4;
 $inter_cal=$row[22]*2;
 $briellon=$row[22]*8 ;
// $etiquette=$row[22]*4;
 $feille_examen=$row[22]*4 ;
 $liste_cond_par_classe=$row[22]*3 ;
 $listing=$row[21] ;
 $etiquette=$feille_examen;
 $autorite_tot=2;
 $stylo=2+$ammana+$itissal;
 $conv_com_secrit=$ammana+$itissal;
 $autorite_tot=2+$ammana+$itissal+$conv_gardien;
 //echo"$pv_salle";
$sql = mysql_query("UPDATE tab_total SET pv_salle='$pv_salle',autorite_tot='$autorite_tot',conv_gardien='$conv_gardien',conv_com_secrit='$conv_com_secrit', envloppe='$envloppe',inter_cal='$inter_cal', briellon='$briellon',etiquette='$etiquette',feille_examen='$feille_examen',liste_cond_par_classe='$liste_cond_par_classe',ammana='$ammana',commun='$itissal',travails='$op',stylo='$stylo', listing='$listing' where cod_etab='$i' ");

         			$requete = mysql_query($sql)  ;
			
              
               //affichage des résultats, pour savoir si l'insertion a marchée:
             if($requete)
             {
              echo("L'insertion a été correctement effectuée") ;
			  
              }
              else
              {
              echo("L'insertion à échouée") ;
              }
			  
			
    
}
}
?>

</body>
</html>
