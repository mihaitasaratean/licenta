<?php
$title="Adauga parole"; //Aici se declara titlul paginii
include 'header.php';

include 'meniu_header.php';

include 'header_to_body.php'; 

include 'conectare.php';
?>




<div id="index_center" style="margin-top: 15%;">

<form action="home.php" method="POST">

<table>
<tr>
    <td id="td_login">
    <label id="label_login" for="aplicatie">Aplicatie: </label></td><td>
    <input id="textarea" type="textarea" name="aplicatie" placeholder="Introdu numele aplicatiei... " />
    </td>
</tr>
<tr>
    <td id="td_login">
    <label id="label_login" for="parola1">Parola: </label></td><td>
    <input id="textarea" type="password" name="parola1" placeholder="Introdu parola... " />
</td>
</tr>
<tr>
    <td id="td_login">
    <label id="label_login" for="parola2">Reintrodu parola: </label></td><td>
    <input id="textarea" type="pasword" name="parola2" placeholder="Reintrodu parola... " />
</td>
</tr>
</table>

<button id="adauga_submit" type="submit" > Salvare </button>
<button id="adauga_reset" type="reset" > Reseteaza  </button>
<input id="adauga_cancel" type="button" onclick="window.location.replace('home.php')" value="Cancel" />

</form>

</div>






<?php
include 'footer.php';
?>


