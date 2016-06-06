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
 
<script>
function ClipBoard(num){
	obj = document.getElementById('copytext'+num);
	holdtext.innerText = obj.innerText;
	therange = holdtext.createTextRange();
	therange.execCommand("RemoveFormat"); // this line here is if u want copy tags into the element id
	therange.execCommand("Copy");
}
</script>
 
 <?php
    //".$row[1]."
if ($rowcount>0){
    while ($row = mysqli_fetch_row($resursa))
	{
 ?>
 <tr>
	<?php  //echo "id: ".$row[0];?>
    <td><?php echo $row[0];?></td>	<?php	//afiseaza numele ?>
	     
    <td id = 'copytext".$row[1]."'><?php  echo $row[1]; ?></td>	<?php	//afiseaza parola ?>
	
    <td style="text-align:center;"><button onClick='clipboard(".$row[1].")'>COPIAZA</button></td>
    
    
 </tr>
 <?php
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


