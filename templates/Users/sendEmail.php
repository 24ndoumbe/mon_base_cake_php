

<!-- templates/Users/send_email.php -->

<h1>Envoyer un e-mail</h1>

<!-- Formulaire pour envoyer l'email -->
<?= $this->Form->create(null, ['url' => ['action' => 'sendEmail']]) ?>
<?= $this->Html->link('Envoyer un e-mail', ['controller' => 'Users', 'action' => 'sendEmail'], ['class' => 'button']) ?>

    <!-- Champ pour l'email du destinataire -->
    <?= $this->Form->control('to', [
        'label' => 'Destinataire',
        'type' => 'email',
        'required' => true
    ]) ?>

    <!-- Champ pour le sujet -->
    <?= $this->Form->control('subject', [
        'label' => 'Sujet',
        'type' => 'text',
        'required' => true
    ]) ?>

    <!-- Champ pour le corps du message -->
    <?= $this->Form->control('message', [
        'label' => 'Message',
        'type' => 'textarea',
        'required' => true
    ]) ?>

    <!-- Bouton d'envoi -->
    <?= $this->Form->button('Envoyer l\'email') ?>

<?= $this->Form->end() ?>
