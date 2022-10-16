 <html dir="rtl">

<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>rec</title>

</head>
<body>
<center><pre>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imthne';



$link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
mysql_select_db($db) or die ('Erreur :'.mysql_error());
mysql_query("set character_set_server='utf8'");
mysql_query("set names 'utf8'");

if(isset($_POST['code_etab']))//tester le chois de l'etablissent
{
     $code_etab=$_POST['code_etab'];
     $don=mysql_query("select * from tab_niv,niveau where cod_etab='$code_etab' ");
	 $nb=mysql_num_rows($don);
	// echo $nb;
	 $line= mysql_fetch_array($don);
	
?>

   <table>
  <tbody>
    <tr>
      <td style="width: 160px"><img src="onefd.png" height="134" width="160"</td>
      <td colspan="5" rowspan="1" > الجمهورية الجزائرية الديمقراطية الشعبية<br /> وزارة التربية الوطنية<br /> الديوان الوطني للتعليم و التكوين عن بعد<br /> المركز الجهوي سطيف</td>
      <td><img src="onefd.png" height="134" width="160"</td>
    </tr>
    <tr>
      <td colspan="7" rowspan="1">البــطاقــة التـقنيــة</td>
    </tr>
    <tr>
      <td colspan="7" rowspan="1">امتــحـان المســـتوى دورة 04/03 مـــاي 2016</td>
    </tr>
    <tr>
      <td>اسـم مركـز الإجـراء</td>
      <td colspan="6" rowspan="1"><?php echo $line['etab'];?></td>
    </tr>
    <tr>
	<tr>
	<td colspan="7" rowspan="1"></td>
	</tr>
	<tr>
				 <td style="width: 80px">الرمز</td>
				 <td>المستوى</td>
                   <td>الشعبة</td>
				 <td>ع المسجلين</td>
				   <td>ع القاعات</td>
				   <td>ملاحظة</td>
				   </tr>
	<?php
	
       $donn=mysql_query("select * from tab_niv INNER JOIN niveau ON tab_niv.cod_etab='$code_etab' and tab_niv.niv=niveau.cod_niv ORDER BY niveau.tri_niv ASC");
	 	   while($line= mysql_fetch_array($donn)) 
 	            {
				echo' <tr>
				 <td>'.$line[2].'</td>
				 <td>'.$line[7].'</td>
                   <td>'.$line[8].'</td>
				 <td>'.$line[3].'</td>
				   <td>'.$line[5].'</td>
				   </tr>';
				}?>
	</tr>
	<tr>
	<td colspan="7" rowspan="1"></td>
	</tr>
    <tr>
      <td>المــؤطـرون الإداريون</td>
      <td colspan="6" rowspan="1"></td>
    </tr>
    <tr>
      <td>رئيس المركز</td>
      <td>نائب الرئيس</td>
      <td>الأمانة</td>
      <td>الاتصال</td>
      <td>أعوان الأمن</td>
      <td>العمال المهنيون</td>
      <td>الأساتذة الحراس</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>ملاحظة</td>
      <td colspan="6" rowspan="1"></td>
    </tr>
    <tr>
      <td>سطيف في : </td>
      <td></td>
      <td colspan="5" rowspan="1">مدير المركز الجهوي</td>
      </tr>
    <tr>
      <td colspan="3" rowspan="1">المركز الجهوي للتعليم و التكوين عن بعد سطيف</td>
	  <td>الهاتف :036930401</td>
	  <td colspan="3" rowspan="1">E-mail :crefd19@yahoo.fr</td>
    </tr>
  </tbody>
 <table>
 <?php
}else {
  $data=mysql_query("select * from tab_stat ");
  
 ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="formulaire">
       إختر اسم مركز الإجـــــــــــــــــراء :<br/><br/>
             <select name="code_etab"> 
       <?php while($a=mysql_fetch_array($data)) 
	                {
       echo '<option value="'.$a['code_etab'].'">'.$a['etablissent'].'</option>';
                    }?></select><br/><br/><br/>
        <input type="submit" value="Afficher les etablissent">
     </form> 
	 <?php
}
?>
  </pre></center>
</body>
</html>