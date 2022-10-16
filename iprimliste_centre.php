 <html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>rec</title>
<style>

</style>
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
$select = "SELECT * FROM tab_stat where pole='سطيف' ";
$result = mysql_query($select);
$total = mysql_num_rows($result);
if($total) 
 { 
  ?>
    <H1 align=center> <STRONG>جـــدول توزيع الطلـبة لولايـــة ســطيــف</STRONG><BR></H1>
    <table style="text-align: centre; " border="1"cellpadding="2" cellspacing="2">
       <thead>
      <tr>
      <th colspan="2" rowspan="1"></th>
      <th colspan="18" rowspan="1">المستويات</th>
      <th colspan="2" rowspan="1"></th>
     </tr>
     <tr  bgcolor="#C0C0C0">
	  <th>رقم المركز</th>
      <th bgcolor="#C0C0C0">إسم المركز</th>
      <th>104</th>
      <th>204</th>
      <th>304</th>
      <th>404</th>
      <th>122</th>
      <th>124</th>
      <th>212</th>
      <th>213</th>
      <th>214</th>
	   <th>215</th>
      <th>218</th>
      <th>216</th>
      <th>237</th>
      <th>312</th>
      <th>313</th>
      <th>314</th>
      <th>316</th>
      <th>318</th>
      <th>337</th>
      <th>عدد المترشحين</th>
      <th>عدد القاعات</th>
      </tr>
	  <thead>
	 <?php
	  while($row = mysql_fetch_array($result)) 
	  { 
     echo' <tr>
      <td>'.$row['code_etab'].' </td>
       
      <td bgcolor="#C0C0C0">'.$row['etablissent'].'</td>
      <td>'.$row['104'].'</td>
      <td>'.$row['204'].'</td>
      <td>'.$row['304'].'</td>
      <td>'.$row['404'].'</td>
      <td>'.$row['122'].'</td>
      <td>'.$row['124'].'</td>
      <td>'.$row['212'].'</td>
      <td>'.$row['213'].'</td>
      <td>'.$row['214'].'</td>
	  <td>'.$row['215'].'</td>
      <td>'.$row['218'].'</td>
      <td>'.$row['216'].'</td>
      <td>'.$row['237'].'</td>
      <td>'.$row['312'].'</td>
      <td>'.$row['313'].'</td>
      <td>'.$row['314'].'</td>
      <td>'.$row['316'].'</td>
      <td>'.$row['318'].'</td>
      <td>'.$row['337'].'</td>
      <td>'.$row['nbr_condidats'].'</td>
      <td>'.$row['nbr_classes'].'</td>
      
     </tr>';
	 }
	 ?>
       </table>
    <?php
    // fin du tableau.
  }
    else 
		echo 'Pas d\'enregistrements dans cette table...';
 
 $select = "SELECT * FROM tab_stat where pole='برج بوعريريج' ";
$result = mysql_query($select);
$total = mysql_num_rows($result);
if($total) 
 { 
  ?>
  <H1 align=center> <STRONG>جـــدول توزيع الطلـبة لولايـــة برج بوعريريج</STRONG><BR></H1>
    <table style="text-align: centre;" border="1"cellpadding="2" cellspacing="2">
     <thead>
      <tr>
      <th colspan="2" rowspan="1"></th>
      <th colspan="18" rowspan="1">المستويات</th>
      <th colspan="2" rowspan="1"></th>
     </tr>
     <tr  bgcolor="#C0C0C0">
      <th>رقم المركز</th>
     
      <th bgcolor="#C0C0C0">إسم المركز</th>
      <th>104</th>
      <th>204</th>
      <th>304</th>
      <th>404</th>
      <th>122</th>
      <th>124</th>
      <th>212</th>
      <th>213</th>
      <th>214</th>
      <th>218</th>
      <th>216</th>
      <th>237</th>
      <th>312</th>
      <th>313</th>
      <th>314</th>
      <th>316</th>
      <th>318</th>
      <th>337</th>
      <th>عدد المترشحين</th>
      <th>عدد القاعات</th>
      </tr>
	  <thead>
	 <?php
	  while($row = mysql_fetch_array($result)) 
	  { 
     echo' <tr>
      <td>'.$row['code_etab'].' </td>
       
      <td bgcolor="#C0C0C0">'.$row['etablissent'].'</td>
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
      <td>'.$row['312'].'</td>
      <td>'.$row['313'].'</td>
      <td>'.$row['314'].'</td>
      <td>'.$row['316'].'</td>
      <td>'.$row['318'].'</td>
      <td>'.$row['337'].'</td>
      <td>'.$row['nbr_condidats'].'</td>
      <td>'.$row['nbr_classes'].'</td>
      
     </tr>';
	 }
	 ?>
      </table>
    
  <?php
    // fin du tableau.
  }
    else 
		echo 'Pas d\'enregistrements dans cette table...';
  
 
$select = "SELECT * FROM tab_total where pole='سطيف' ";
$result = mysql_query($select);
$select_tot = "SELECT SUM(nbr_cond_par_centre),sum(nbr_niv)
       ,SUM(nbr_classes)
       ,SUM(listing)
     ,SUM(liste_cond_par_classe)
     ,SUM(feille_examen)
       ,SUM(etiquette)
       ,SUM(inter_cal)
       ,SUM(briellon)
       ,SUM(pv_salle)
       ,SUM(envloppe)
       ,SUM(stylo)
      ,SUM(ammana)
      ,SUM(commun)
       ,SUM(conv_com_secrit)
       ,SUM(autorite_tot)
       ,SUM(conv_gardien) FROM tab_total where pole='سطيف' ";
$result_tot = mysql_query($select_tot);
$total = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$row_tot = mysql_fetch_array($result_tot);
$t=$row_tot[0];
echo $t;
if($total) 
 { 
  ?>
 
  <H1 align=center> <STRONG>البــطاقــة التقـنـيـة لولايــة ســطيــف</STRONG><BR></H1>
    <table style="text-align: centre; " border="1"cellpadding="2" cellspacing="2">
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
	 echo'  <thead>
     <tr>
     <th>المجموع</th>
 <th>'.$row_tot[0].'</th>
 <th>'.$row_tot[1].'</th>
<th>'.$row_tot[2].'</th>
 <th>'.$row_tot[3].'</th>
 <th>'.$row_tot[4].'</th>
  <th>'.$row_tot[5].'</th>
 <th>'.$row_tot[6].'</th>
  <th>'.$row_tot[7].'</th>
  <th>'.$row_tot[8].'</th>
 <th>'.$row_tot[9].'</th>
      <th>'.$row_tot[10].'</th>
      <th>'.$row_tot[11].'</th>
      
<th>'.$row_tot[12].'</th>
<th>'.$row_tot[13].'</th>
<th>'.$row_tot[14].'</th>
      <th>'.$row_tot[15].'</th>
      <th>'.$row_tot[16].'</th>
      
    </tr>
	</thead>';
	 ?>
       </table>
   
  <?php
    // fin du tableau.
  }
    else 
		echo 'Pas d\'enregistrements dans cette table...';
	 
$select = "SELECT * FROM tab_total where pole='برج بوعريريج' ";
$select_tot_b = "SELECT SUM(nbr_cond_par_centre),sum(nbr_niv)
       ,SUM(nbr_classes)
       ,SUM(listing)
     ,SUM(liste_cond_par_classe)
     ,SUM(feille_examen)
       ,SUM(etiquette)
       ,SUM(inter_cal)
       ,SUM(briellon)
       ,SUM(pv_salle)
       ,SUM(envloppe)
       ,SUM(stylo)
      ,SUM(ammana)
      ,SUM(commun)
       ,SUM(conv_com_secrit)
       ,SUM(autorite_tot)
       ,SUM(conv_gardien) FROM tab_total where pole='برج بوعريريج' ";
$result_tot_b = mysql_query($select_tot_b);
$row_tot_b = mysql_fetch_array($result_tot_b);

$result = mysql_query($select);
$total = mysql_num_rows($result);
if($total) 
 { 
  ?>
  <H1 align=center> <STRONG>البــطاقــة التقـنـيـة لولايــة برج بوعريريـج</STRONG><BR></H1>
    <table style="text-align: centre;" border="1"cellpadding="2" cellspacing="2">
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
	  echo'  <thead>
     <tr>
     <th>المجموع</th>
 <th>'.$row_tot_b[0].'</th>
 <th>'.$row_tot_b[1].'</th>
<th>'.$row_tot_b[2].'</th>
 <th>'.$row_tot_b[3].'</th>
 <th>'.$row_tot_b[4].'</th>
  <th>'.$row_tot_b[5].'</th>
 <th>'.$row_tot_b[6].'</th>
  <th>'.$row_tot_b[7].'</th>
  <th>'.$row_tot_b[8].'</th>
 <th>'.$row_tot_b[9].'</th>
      <th>'.$row_tot_b[10].'</th>
      <th>'.$row_tot_b[11].'</th>
      
<th>'.$row_tot_b[12].'</th>
<th>'.$row_tot_b[13].'</th>
<th>'.$row_tot_b[14].'</th>
      <th>'.$row_tot_b[15].'</th>
      <th>'.$row_tot_b[16].'</th>
      
    </tr>
	</thead>';
	 ?>
      </table>
    
  <?php
    // fin du tableau.
  }
    else 
		echo 'Pas d\'enregistrements dans cette table...';
  ?>
 </body>
</html>
