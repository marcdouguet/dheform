<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Détection des hémistiches formulaires</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css" type="text/css" />
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

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
      <a href="#info" id="trigger-info" title="Aide et présentation du projet" class="tooltip-e fancybox"><i class="fa fa-question">&#160;</i></a>
      <div style="display: none">
          <div id="info" style="width:1200px;height:1200px;overflow:auto;">
            <h3>Données</h3>
      <ul>
      <li><a href="http://theatre-classique.fr/">Théâtre classique (Paul Fièvre)</a></li>
      <li><a href="http://bibdramatique.paris-sorbonne.fr/">Bibliothèque dramatique (UMR CELLF 16-21)</a></li>
      <li><a href="http://obvil.paris-sorbonne.fr/corpus/moliere/moliere/">Projet Molière (labex OBVIL)</a></li>
      </ul>

      <br/>
      <p>Programme développé par Marc Douguet dans le cadre du labex OBVIL.</p>
      <p>Le site et les données sont hébergés par l'axe <a href="https://demarreshs.hypotheses.org/">Démarre SHS!</a> de l'Institut des données de Grenoble (IDEX Université Grenoble Alpes).</p>
      <p>Contact : marc.douguet[at]univ-grenoble-alpes.fr</p></div></div>
    </body>
</html>
