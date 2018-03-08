<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Détection des hémistiches formulaires</title>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
      <div class="form">
        <p>Entrer le texte à analyser</p>
      <form method="post">
          <textarea name="text">Mais la Reine paraît. J’estime votre zèle,
Prince, mais ce dessein me rendrait criminelle,
Et je dois redouter la colère des Dieux.
Seront-ils contre vous pour un ambitieux ?
Quels que soient ses projets, s’ils méritent leur foudre,
Leur justice sans nous en saura bien résoudre.
Quand vous aurez parlé, nous verrons quels avis
Dans cette occasion doivent être suivis.
          </textarea>
          <select name="corpus">
            <option value="" selected>Ou sélectionner un texte du corpus : </option>
            <?php include("options.html") ?>
          </select>
          <input type="submit" value="Envoyer"/>
      </form>
      </div>
    </body>
</html>
