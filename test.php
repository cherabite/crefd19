 <html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>rec</title>


</head>
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
$select = "SELECT * FROM tab_total where pole='سطيف' ";
$result = mysql_query($select);
$total = mysql_num_rows($result);
if($total) 
 { 
  ?>
  
  <div>
  <H1 align=center> <STRONG>البــطاقــة التقـنـيـة لولايــة ســطيــف</STRONG><BR></H1>
    <table style="text-align: centre; " border="1"cellpadding="2" cellspacing="2">
     <tbody>
	 <thead>
     <tr>
     <th>مركز الإجراء</th>
 <th>عدد المترشحين</th>
 <th>عدد المستويات</th>
<th>عدد القاعات</th>
 <th>Listing</th>
 <th>Listes par Salles</th>
  <th>أوراق الإجابة</th>
 <th>الملصقات (Etiquettes)</th>
  <th>أوراق إضافية</th>
  <th>أواق مسودة</th>
 <th>محضر القاعة</th>
      <th>أظرفة</th>
      <th>أقلام جافة</th>
      
<th>الأمانة</th>
<th>الإتصال</th>
<th>إستدعاء الأمانة و الاتصال</th>
      <th>ترخيص الهيئة المستخدمة</th>
      <th>إستدعاء الحراس</th>
      

    </tr>
	</thead>

	 <?php
	  while($row = mysql_fetch_array($result)) 
	  { 
     echo' <tr>
            
      <td bgcolor="#C0C0C0">'.$row['etab'].'</td>
      <td>'.$row['nbr_cond_par_centre'].'</td>
      <td>'.$row['nbr_niv'].'</td>
      <td>'.$row['nbr_classes'].'</td>
      <td>'.$row['listing'].'</td>
      <td>'.$row['liste_cond_par_classe'].'</td>
      <td>'.$row['feille_examen'].'</td>
      <td>'.$row['etiquette'].'</td>
      <td>'.$row['inter_cal'].'</td>
      <td>'.$row['briellon'].'</td>
      <td>'.$row['pv_salle'].'</td>
      <td>'.$row['envloppe'].'</td>
      <td>'.$row['stylo'].'</td>
      <td>'.$row['ammana'].'</td>
      <td>'.$row['commun'].'</td>
      <td>'.$row['conv_com_secrit'].'</td>
      <td>'.$row['autorite_tot'].'</td>
      <td>'.$row['conv_gardien'].'</td>
     
      
     </tr>';
	 }
	 ?>
      </tbody>
     </table>
    </div>
  <?php
    // fin du tableau.
  }
    else 
		echo 'Pas d\'enregistrements dans cette table...';
	 

  ?>
 </body>
</html>
