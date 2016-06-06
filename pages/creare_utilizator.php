<?php
$title = "Creare utilizator"; //Aici se declara titlul paginii
include 'header.php';
include 'header_to_body.php';
?>

<!--<div style="float:left; margin:20px;">-->
<div id="index_center" style="margin-top: 15%;">

<form action="autentificare.php" method="POST">

<table>
<tr><td style="text-align: center;" colspan="2"> <legend><h1>Creare utilizator nou</h1></legend></td></tr>
<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="nume">Nume: </label></td><td>
    <input id="textarea" name="nume" type="textarea" placeholder="Introdu Numele" />
    </td>
</tr>

<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="prenume">Prenume: </label></td><td>
    <input id="textarea" name="prenume" type="textarea" placeholder="Introdu Prenumele" />
    </td>
</tr>

<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="email">Email: </label></td><td>
    <input id="textarea" name="email" type="textarea" placeholder="Introdu email-ul" />
    </td>
</tr>

<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="username">Username: </label></td><td>
    <input id="textarea" name="username" type="textarea" placeholder="Introdu username-ul... " />
    </td>
</tr>

<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="parola1">Parola: </label></td><td>
    <input id="textarea" name="parola1" type="textarea" type="password" placeholder="Introdu parola dorita" />
    </td>
</tr>


<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="parola2">Repeta parola: </label></td><td>
    <input id="textarea" name="parola2" type="textarea" type="password" placeholder="Introdu din nou parola" />
    </td>
</tr>

<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="pin1">PIN: </label></td><td>
    <input id="textarea" name="pin1" type="textarea" type="password" placeholder="Introdu PIN-ul" />
    </td>
</tr>

<tr>
    <td id="td_creare_util">
    <label id="label_creare_util" for="pin2">Repeta PIN-ul: </label></td><td>
    <input id="textarea" name="pin2" type="textarea" type="password" placeholder="Reintrodu PIN-ul" />
    </td>
</tr>

</table>

<button id="autentificare_submit" type="submit" > Creaza utilizator </button>
<button id="autentificare_reset" type="reset" > Reset </button>
<input id="autentificare_cancel" type="button" onclick="window.location.replace('index.php')" value="Pagina principala" />



</form>

</div>


<?php
include 'footer.php';
?>
