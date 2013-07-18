<div class="part">
      <h1>Récapitulatif de saisie:</h1>
      <p>Nom: <?php echo $sf_user->getName() ?></p>
      <p>Prénom: <?php echo $sf_user->getName() ?></p>
      <p>Association: <?php /*echo $assoc*/ ?></p>
      <p>Accès demandés:
        <ul>
        <?php /*Attention ça pique aux yeux*/
          if (isset($_POST["porte_mde"]) && $_POST["porte_mde"]==1) echo "<li>Porte de la MDE</li>";
          if (isset($_POST["bat_a"]) && $_POST["bat_a"]==1) echo "<li>Batiment A</li>";
          if (isset($_POST["mde_complete"]) && $_POST["porte_mde"]==1) echo "<li>MDE complète</li>";
          if (isset($_POST["locaux_pic"]) && $_POST["locaux_pic"]==1) echo "<li>Locaux du PIC</li>";
          if (isset($_POST["bureau_polar"]) && $_POST["bureau_polar"]==1) echo "<li>Bureau du Polar</li>";
          if (isset($_POST["perm_polar"]) && $_POST["perm_polar"]==1) echo "<li>Permanence du Polar</li>";
          if (isset($_POST["salles_musique"]) && $_POST["salles_musique"]==1) echo "<li>Salles de musique</li>";
        ?> 
        </ul>
      </p>
      <p>Motif:</p>
      <p><?php echo $_POST["motif"] ?></p>
      <form method="post" action="<?php echo url_for('locaux_ctrl') ?>">
        <p>En saisissant mon login <em><?php echo $sf_user->getUsername() ?></em> ci-dessous et en cliquant sur <i>Valider</i>, je déclare :</p>
        <p><ul>
          <li>avoir pris connaissance de la charte et l'approuver</li>
          </ul>
        </p>
        <input type="text" name="check" /><br />
        <input type="submit" class="btn btn-primary" value="Valider" />
      </form>
</div>