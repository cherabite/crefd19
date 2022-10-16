<?php

mysql_connect("localhost", "root", "");
mysql_select_db("imthne");
mysql_query("set character_set_server='utf8'");
mysql_query("set names 'utf8'");
$data=mysql_query("select * from tab_stat order by code_etab desc");

?>
<html>
<body>

<center><pre>
<?php

if(isset($_POST['code_etab']))//tester le chois de l'etablissent
{
     $code_etab=$_POST['code_etab'];
     $don=mysql_query("select * from tab_niv where cod_etab='$code_etab'");
	 $nb=mysql_num_rows($don);
	// echo $nb;
	 $line= mysql_fetch_array($don);
	 //echo $etablissent;
?>
  
  <table style="text-align: left; width: 100%;" border="1"
 cellpadding="2" cellspacing="2">
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="formulaire"> 
     <tbody>
     <tr>
      <td style="text-align: center;" colspan="2"rowspan="1">تحديث الحجرات المخصصة لكل مستوى</td>
      </tr>
      <tr>
       <td style="text-align: right;">- أكتب عدد المترشحينفي الخانة المخصصة (عدد المترشحين في الحجرة الأخيرة) فقط عندما يكونالعدد أكبر من &nbsp;<br> </td>
       <td style="text-align: right;">ملاحظة :</td>
	   </tr>
	
      <tr>
	
      	     <td colspan="2" rowspan="1">
         <table style="width: 100%; text-align: center;"
            border="1" cellpadding="2" cellspacing="2">
            <tbody>
          <tr>
            <td colspan="3" rowspan="1"><?php echo $line['etab'];?></td>
			<td>مركز الإجراء :</td>
          </tr>
          <tr>
            <td>عدد المترشحين في&nbsp; الججرة الأخيرة</td>
			<td>عدد القاعات</td>
			<td>عدد المترشحين</td>
			<td>المستوى :</td>
          </tr>
          <tr>
		   <?php
		   $donn=mysql_query("select * from tab_niv where cod_etab='$code_etab'");
	 	   while($line= mysql_fetch_array($donn)) 
	            { 
			    echo '<tr>
				<td><input type="text" name="obs2[]" value="'.$line['obs2'].'"></td>
				<td><input type="text" name="obs1[]" value="'.$line['obs1'].'"></td>
				<td>'.$line['nbr_cond_par_niv'].'</td>
				 <td> '.$line['niv'].'</td>
	            <input type="hidden" name="cod_etab" value="'.$line['cod_etab'].'">
	                  <input type="hidden" name="niv[]" value="'. $line['niv'].'">
					  
		       	 </tr>';
	           }
	       ?>
          </tr>
          </tbody>
         </table>
         </td>
	  
	    </tr>
		
	  <tr>
	   
	 <td style="text-align: center;" colspan="2"rowspan="1">
	 <input type="submit" name="modiff" value="حفظ التغييرات"></td>
	 
	  
	  </tr>
	  </tbody>
  
  </form>
</table> 


<?php
} //fin chois de l'etabliss ent
else//fourmulaire de chois l'etablissent
{ 
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
if(isset($_POST['modiff']))
{
$id1=$_POST['cod_etab'];
$id2=$_POST['niv'];
$obs1=$_POST['obs1'];
$obs2=$_POST['obs2'];

$j=0;
/*
foreach($_POST['obs1'] as $i=>$bidon) {

// On récupère les valeurs cachées
$vo = $_POST['obs1'][$i];

echo $vo;
}
*/
foreach($_POST['niv'] as $i=>$bidon) {

// On récupère les valeurs cachées

$d=$_POST['niv'][$i];
$j=$j+1;
} 
//echo $j;
for($i=0;$i<$j;$i++)
{
	//echo $id2[$i];
$req="update tab_niv set obs1='$obs1[$i]',obs2='$obs2[$i]' where cod_etab='$id1' and niv='$id2[$i]'";
$resulta=mysql_query($req);
} 
}
?>
<br/><br/><a href="afficher_stage.php">Revenir à la page précédente !</a>
</pre></center>

</body>
</html>