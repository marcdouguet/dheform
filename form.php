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
          <textarea name="text"><?php include "corneillep_cinna.txt"; ?>
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
