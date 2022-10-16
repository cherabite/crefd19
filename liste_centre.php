 <html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>rec</title></head>
<body>
<?php
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
$result = mysql_query($select);
$total = mysql_num_rows($result);
if($total) 
 { 
  ?>
   
    <table style="text-align: centre; width: 100%;" border="1"cellpadding="2" cellspacing="2">
     <tbody>
      <tr>
      <td colspan="4" rowspan="1"></td>
      <td colspan="18" rowspan="1">المستويات</td>
      <td colspan="3" rowspan="1"></td>
     </tr>
     <tr>
      <td>رقم المركز</td>
      <td>الولاية</td>
      <td>مدير المركز</td>
      <td>إسم المركز</td>
      <td>104</td>
      <td>204</td>
      <td>304</td>
      <td>404</td>
      <td>122</td>
      <td>124</td>
      <td>212</td>
      <td>213</td>
      <td>214</td>
      <td>218</td>
      <td>216</td>
      <td>237</td>
	  <td>251</td>
      <td>253</td>
      <td>255</td>
      <td>257</td>
      <td>312</td>
      <td>313</td>
      <td>314</td>
      <td>316</td>
      <td>318</td>
      <td>337</td>
	  
	  <td>351</td>
      <td>353</td>
      <td>355</td>
      <td>357</td>
      <td>عدد المترشحين</td>
      <td>عدد القاعات</td>
      <td>تحديث</td>
     </tr>
	 <?php
	  while($row = mysql_fetch_array($result)) 
	  { 
     echo' <tr>
      <td>'.$row['code_etab'].' </td>
      <td>'.$row['pole'].'</td>
      <td>'.$row['directeur'].'</td>
      <td>'.$row['etablissent'].'</td>
      <td>'.$row['104'].'</td>
      <td>'.$row['204'].'</td>
      <td>'.$row['304'].'</td>
      <td>'.$row['404'].'</td>
      <td>'.$row['122'].'</td>
      <td>'.$row['124'].'</td>
      <td>'.$row['212'].'</td>
      <td>'.$row['213'].'</td>
      <td>'.$row['214'].'</td>
      <td>'.$row['218'].'</td>
      <td>'.$row['216'].'</td>
      <td>'.$row['237'].'</td>
	  
	  <td>'.$row['251'].'</td>
      <td>'.$row['253'].'</td>
      <td>'.$row['255'].'</td>
      <td>'.$row['257'].'</td>
      <td>'.$row['312'].'</td>
      <td>'.$row['313'].'</td>
      <td>'.$row['314'].'</td>
      <td>'.$row['316'].'</td>
      <td>'.$row['318'].'</td>
      <td>'.$row['337'].'</td>
	  <td>'.$row['351'].'</td>
      <td>'.$row['353'].'</td>
      <td>'.$row['355'].'</td>
      <td>'.$row['357'].'</td>
      <td>'.$row['nbr_condidats'].'</td>
      <td>'.$row['nbr_classes'].'</td>
      <td><a href="modif_centre.php?reference= '.$row['code_etab'].'"> تحديث</a></td>
     </tr>';
	 }
	 ?>
      </tbody>
     </table>
    
  <?php
    // fin du tableau.
  }
    else 
		echo 'Pas d\'enregistrements dans cette table...';
  ?>
 

 </body>
</html>
