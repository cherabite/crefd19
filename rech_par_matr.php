<html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>recherche par matr</title></head>
<body>
<?php

// information pour la connection à le DB
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imthne';

// connection à la DB

$link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
mysql_select_db($db) or die ('Erreur :'.mysql_error());
$select = "SELECT * FROM tab_stat ";
//$select = "SELECT * FROM ELEVE19 WHERE NPR='$nbr'" ;
$result = mysql_query($select);
$total = mysql_num_rows($result);
$nbrchamps=mysql_num_fields($result);

while($row = mysql_fetch_array($result))

{
	
	for ($i=1;$i<27;$i++)
	{
		$v=$row[$i];
		if($v>0)
		{
		$field=mysql_field_name($result, $i);	
			 //création de la requête SQL:
             $sql = "INSERT  INTO tab_niv (cod_etab ,etab ,niv,nbr_cond_par_niv )
            VALUES ( '$row[31]','$row[27]','$field','$row[$i]') " ;
 
           //exécution de la requête SQL:
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
	
}

?>
</body>
</html>
