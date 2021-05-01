<?php
include("header.inc.php");
echo "<h1>Je suis la page Formulaire</h1>";
echo"<form>
    <fieldset> 
        <legend><h3>Ajouter et modifier les ampoules</h3></legend>
        <table>
            <tr><td>Etages : </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
            <tr><td>Prix : </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
            <tr><td>Position : </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
            <tr><td>Date : </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
            <tr>
                <td><input type=\"submit\" value=\"Ajouter\"></td>
                <td><input type=\"submit\" value=\"Modifier\"></td>
            </tr>    
        </table>
     </fieldset> 

</form>";
require_once("footer.inc.php");
?>