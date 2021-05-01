<?php
include("header.inc.php");
echo "<div class=\"container\">
<h1 class=\"maint\">Animated Contact Form</h1>
<div class=\"section animated bounceInLeft\">
    <div class=\"brandname\">
        <h3>DESIGN PRO</h3>
        <ul class=\"deux\">
            <li> +91 1234567890</li>
            <li>contact@webdevtrick.com</li>
            <li>designpro.com</li>
        </ul>
    </div>
    <div class=\"contact2\">
        <h3>Email Me</h3>
        <form>
        <fieldset>
        <table>
        <tr><td>Nom : </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
        <tr><td>Prénom: </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
        <tr><td>Email : </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
        <tr><td>Tel: </td><td><input type=\"text\" name=\"etages\" size=\"40\" maxlength=\"30\"/></td></tr>
        <tr>
            <td><input type=\"submit\" value=\"Envoyer\"></td>
        </tr>    
    </table>
        </fieldset>
      
        </form>
    </div>
</div>
</div>";
require_once("footer.inc.php");
?>