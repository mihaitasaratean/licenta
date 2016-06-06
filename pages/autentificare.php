<?php
$title = "Autentificare"; //Aici se declara titlul paginii
include 'header.php';
include 'header_to_body.php';
?>

<!--<div style="float:left; margin:20px;">-->
<div id="index_center" style="margin-top: 15%;">

<form action="home.php" method="POST">

<table>
<tr>
    <td id="td_login">
    <label id="label_login" for="username">Username: </label></td><td>
    <input id="textarea" type="textarea" name="username" placeholder="Introdu username-ul... " />
    </td>
</tr>
<tr>
    <td id="td_login">
    <label id="label_login" for="parola">Parola: </label></td><td>
    <input id="textarea" type="password" name="parola" placeholder="Introdu parola... " />
</td>
</tr>
</table>

<button id="autentificare_submit" type="submit" > Autentifica </button>
<button id="autentificare_reset" type="reset" > Reset </button>
<input id="autentificare_cancel" type="button" onclick="window.location.replace('index.php')" value="Pagina principala" />

</form>

</div>


<?php
include 'footer.php';
?>
