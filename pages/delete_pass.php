<?php
$title="Adauga parole"; //Aici se declara titlul paginii
include 'header.php';

include 'meniu_header.php';

include 'header_to_body.php'; 

include 'conectare.php';
?>

<?php
    $sql = "SELECT nume, parola, fkUserId FROM parola ORDER BY nume ASC";
	$resursa = mysqli_query($con,$sql);
	//print_r($resursa);    echo "<br>";
    $rowcount=mysqli_num_rows($resursa);

?>


<div id="afisare_parole">

<table id="tabel_afisare_parole">
<tr>
    <td><h3>Aplicatie</h3></td>
    <td colspan="2"><h3>Parola</h3></td>
</tr>

<script type="text/javascript" src="../scripts/stergeParole.js"></script>


<?php

if($rowcount>0){
    
    while ($row = mysqli_fetch_row($resursa))
    {
?>
<tr> <!--Aici se afiseaza randurile cu parolele salvate-->
<?php

$unique_id = md5(uniqid()); // genereaza id random, criptat cu md5
?>

<td><?php echo $row[0];?></td>
<td>
<span id="<?=$unique_id?>"> <?php echo $row[1]; ?></span>
</td>

<td style="text-align: center;">
<button onclick="delete($unique_id)">Sterge parola</button>
<button onclick="alertConfirm()">Sterge parola</button>

</td>
</tr>


<?php
    }
}else{
    echo "<h1> Nu sunt parole disponibile pentru stergere</h1>";
}
?>

</table>
<p id="alert" style="text-height: 50px; color: red;"></p>
</div>





<?php
include 'footer.php';
?>


