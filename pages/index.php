<?php
$title="Prezentare"; //Aici se declara titlul paginii
include 'header.php';
include 'header_to_body.php';
?>

<div style="float:left;">

Aici este o gramada de text de inceput
<br/>
<h1>ABURELI<h1>

</div>



<div id="index_center">

	<span id="span_buton">
		<!-- Buton Autentificare-->
		<form action="autentificare.php" >

		<button id="index_button" type="submit" > Autentificare </button>
		</form>
	</span>
	
	<span id="span_buton">
		<!-- Buton Inregistrare-->
		<form action="creare_utilizator.php">
		
		<button id="index_button" type="submit" > Inregistrare </button>
		</form>
	</span>
	
</div>

<?php
include 'footer.php';
?>
