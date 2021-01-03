<?php
include "header.php";
include "footer.php";
include "Config.php";
include "LoginPhp.php";
?>

<html>
    <head><meta charset="utf-8"/><title>INSCRIPTION</title></head>
    <body>
        <br>
        <table align="center">
            <script type="text/javascript" src="cds.js"></script>
            <h1 align="center">INSCRIPTION: </h1>
            <form id="formulaire" method="post" action="Traitement.php">
                <tr>
                    <td><label for="nom">Nom :</label></td>
                    <td><input type="text" id="nom" name="nom"></td>
                    <td><font color="red"><span id="erreur_nom"></span></font></td>
                </tr>
                <tr>
                    <td><label for="prenom">Prenom :</label></td>
                    <td><input type="text" id="prenom" name="prenom"></td>
                    <td><font color="red"><span id="erreur_prenom"></span></font></td>
                </tr>
                <tr>
                    <td><label for="sexe">Sexe :</label></td>
                    <td><select id="sexe" nom="sexe"><option value="Selectionner">Selectionner votre sexe</option><option value="Homme">Homme</option><option value="Femme">Femme</option></select></td>
                    <td><font color="red"><span id="erreur_sexe"></span></font></td>
                </tr>
                <tr>
                    <td><label for="taille">Taille(cm) :</label></td>
                    <td><input type="number" id="taille" name="taille"></td>
                    <td><font color="red"><span id="erreur_taille"></span></font></td>
                </tr>
                <tr>
                    <td><label for="poids">Poids(kg) :</label></td>
                    <td><input type="number" id="poids" name="poids"></td>
                    <td><font color="red"><span id="erreur_poids"></span></font></td>
                </tr>
                <tr>
                    <td><label for="adresse">Adresse :</label></td>
                    <td><input type="text" id="adresse" name="adresse"></td>
                    <td><font color="red"><span id="erreur_adresse"></span></font></td>
                </tr>
                <tr>
                    <td><label for="email">Mail :</label></td>
                    <td><input type="mail" id="email" name="email"></td>
                    <td><font color="red"><span id="erreur_mail"></span></font></td>
                </tr>
                <tr>
                    <td><label for="date_naissance">Date de Naissance :</label></td>
                    <td><input type="date" id="date_naissance" name="date_naissance"></td>
                    <td><font color="red"><span id="erreur_date"></span></font></td>
                </tr>
                <tr>
                    <td><label for="mdp">Mot de Passe :</label></td>
                    <td><input type="password" id="mdp" name="mdp"></td>
                    <td><font color="red"><span id="erreur_mdp"></span></font></td>
                </tr>
                <tr>
                    <td><label for="mdp">Confirmation du Mot de Passe :</label></td>
                    <td><input type="password" id="mdp2" name="mdp2"></td>
                    <td><font color="red"><span id="erreur_mdp2"></span></font></td>
                </tr>
                <tr>
                    <td><label></label></td>
                    <td><br><input type="submit" value="Envoyer" name="send" onclick="verification()"></td>
                </tr>
            </form>
        </table>
    </body>
</html>