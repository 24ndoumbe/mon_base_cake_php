<h3>Votre nouveau mot de passe est :</h3>
<p><strong><?= h($newPassword) ?></strong></p>

<!-- Lien vers la page de connexion -->
<p>
    Vous pouvez maintenant vous connecter avec ce mot de passe. 
    <?= $this->Html->link('Se connecter', ['action' => 'login'], ['class' => 'btn btn-primary']) ?>
</p>
