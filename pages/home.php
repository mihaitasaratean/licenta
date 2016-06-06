<?php
$title="Home"; //Aici se declara titlul paginii
include 'header.php';

?>

<div id="meniu">

<span id="span_buton_meniu">
<a href="home.php">Home</a>
</span>


<span id="span_buton_meniu">
<a href="add_pass.php">Adauga parole</a>
</span>

<span id="span_buton_meniu">
<a href="edit_pass.php">Editeaza parole</a>
</span>

<span id="span_buton_meniu">
<a href="delete_pass.php">Sterge parole</a>
</span>

<span id="span_buton_meniu">
<a href="contact.php">Contact</a>
</span>


</div>


<?php 
    include 'header_to_body.php'; 
    include 'conectare.php';
?>



<?php

    $sql = "SELECT nume, parola, fkUserId FROM parola ORDER BY nume ASC";
	$resursa = mysqli_query($con,$sql);
	//print_r($resursa);    echo "<br>";
    $rowcount=mysqli_num_rows($resursa);
    
    //echo $rowcount;
	//$row = mysqli_fetch_row($resursa);               //este in while loop. Daca il pun si pe asta nu imi ia primul record 
    //mysqli_fetch_fields($resursa);
    //print_r($row);
    //echo "<br>";
    //print_r($resursa);
    //echo "<br>";    
    
 ?>
 
 <div id="afisare_parole">
 
 <table id="tabel_afisare_parole">
 <tr>
    <td><h3>Nume</h3></td>
    <td colspan="2"><h3>Parola</h3></td>
 </tr>
 
 <script type="text/javascript" src="../scripts/copyToClipboard.js"></script>
 
 
 <?php
    //".$row[1]."
if ($rowcount>0){
	//int i=0;
	
    while ($row = mysqli_fetch_row($resursa))
	{
       
 ?>
 <tr>           <!--AICI se afiseaza randurile cu parolele salvate-->
	<?php  //echo "id: ".$row[0];
    
    $unique_id = md5(uniqid());     // genereaza id random, criptat cu md5
    //echo $unique_id;                // afiseaza id-ul generat
    ?>
    
    <td><?php echo $row[0];?></td>	<?php	//afiseaza numele ?>
	
    <!-- Aici afiseaza parola-->  
    <td>
        <span id="<?=$unique_id?>" ><?php  echo $row[1]; ?></span>	<?php	//afiseaza parola ?>
	</td>
    
    <!-- Aici afiseaza butonul de copy-->
    <td style="text-align:center;">
        <button onclick="CopyToClipboard(this.$unique_id)" >COPIAZA</button>
    </td>
    
    
 </tr>
 <?php
	//i++;
    }
} else{
    echo "<h1>Nu sunt parole salvate.<h1>";
}
?>
</table>
</div>







<?php
include 'footer.php';
?>


