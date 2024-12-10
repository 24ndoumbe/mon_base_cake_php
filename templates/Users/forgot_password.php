<!-- Affichage du mot de passe généré -->
<?php if (isset($newPassword)): ?>
    <div class="password-display">
        <h3>Votre nouveau mot de passe est :</h3>
        <p class="new-password"><?= h($newPassword) ?></p>
    </div>
<?php endif; ?>

<!-- Formulaire de réinitialisation du mot de passe -->
<div class="password-reset-form">
    <?= $this->Form->create() ?>
        <fieldset>
            <legend>Réinitialiser votre mot de passe</legend>
            <?= $this->Form->control('email', ['label' => 'Votre email',  'label' => 'Entrez votre email']) ?>
        </fieldset>
        <div class="form-actions">
            <?= $this->Form->button('Envoyer', ['class' => 'btn btn-primary']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
<style>
    /* Style général du formulaire */
.password-reset-form {
    max-width: 500px;
    margin: 0 auto;
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Légende du formulaire */
.password-reset-form legend {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 20px;
}

/* Champs du formulaire */
.password-reset-form .form-control {
    margin-bottom: 15px;
    font-size: 1.1em;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

/* Bouton du formulaire */
.password-reset-form .form-actions {
    text-align: center;
}

.password-reset-form .btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    font-size: 1.1em;
    cursor: pointer;
}

.password-reset-form .btn-primary:hover {
    background-color: #0056b3;
}

/* Affichage du mot de passe généré */
.password-display {
    text-align: center;
    margin-bottom: 20px;
    padding: 20px;
    background-color: #e9ecef;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.password-display h3 {
    font-size: 1.4em;
    color: #333;
    margin-bottom: 10px;
}

.password-display .new-password {
    font-size: 1.5em;
    font-weight: bold;
    color: #28a745;
    word-wrap: break-word;
    word-break: break-word;
}

/* Mobile-responsive styles */
@media (max-width: 768px) {
    .password-reset-form {
        padding: 20px;
    }

    .password-display {
        margin-top: 20px;
    }

    .password-reset-form .btn-primary {
        width: 100%;
    }
}

</style>